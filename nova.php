<div id="nova-container">
    <div class="text-right text-uppercase position-absolute top-0 left-0" style="z-index: 9999">
        <button @click="reset">Reset Nova</button>             
    </div>
    <div id="nova-launcher" @click="libraryOpen" class="btn btn-secondary"
        style="position: fixed; bottom: 8px; right: 8px; z-index: 1030;">Nova</div>    
    
    <template v-if="step" ref="novaContent">        
            <transition name="fade">
                <div id="nova-smoke" v-if="backdropActive"></div>            
            </transition>
            <div id="nova-clear" v-if="hiddenBackground"></div>

            <transition name="fade">
                <div id="nova-block" v-if="isNovaBlockVisible" class="position-fixed left-0 right-0" style="z-index: 1051;">
                    <div class="d-flex mx-auto position-relative" style="padding-left: 144px;">
                        <div id="nova-dot" @click="toggleSpin"></div>
                        
                            <div id="nova-text" ref="novaText">
                                
                                    <div>
                                        <div class="d-flex mb-1 align-items-center">
                                            <div class="quest-label font-weight-bold" v-html="quests[currentQuest].name"></div>                                         
                                            <div class="quest-label ml-1">Step {{ currentStep }} of {{ totalSteps }}</div>
                                        </div>
                                        <transition name="fade">
                                        <!-- v-if="isNovaTextVisible" -->
                                        <div>
                                                <h4 class="text-white text-2xl mt-1 mb-0">{{step.title}}</h4>
                                                <div id="nova-block-body" class="text-left" v-html="step.body"></div>
                                            </div>
                                        </transition>
                                    </div>
                            </div>
                    </div>
                    <button v-if="step.continueButton" style="pointer-events: all"
                        class="nova-button-step btn btn-primary btn-lg position-absolute right-8 bottom-8"
                        @click="nextStep">{{step.continueButton}}</button>
                </div>  
            </transition>      
    </template>
    
    <div :class="showLibrary ? 'open' : ''" id="nova-library">
        <button class="position-fixed top-8 left-8 btn btn-link text-white" @click="libraryClose">
            <i class="fas fa-arrow-left mr-2"></i> Back
        </button>
        <button v-if="0" class="position-fixed top-8 right-8 btn btn-link text-white text-xl">
            <i class="fa fa-question-circle"></i> 
        </button>
        <div class="container mt-24">
            <div class="row">
                <div class="col-8 text-white mx-auto mb-5">
                    <h4 class="text-white text-center text-xl">I’ve put together some quests to help you continue to master THiNKTech. Choose your path, and if you need help just reach out!</h4>
                </div>
                
            </div>
            <div id="nova-library-content">

            </div>
        </div>
    </div>
</div>

<script src="/components/nova.js"></script>
<script>
var nova = new Vue({
    el: '#nova-container',  
    data: function() {
        return {
            isNovaTextVisible: true,
            isNovaBlockVisible: false,
            animationInitialized: false,
            showLibrary: false,
            backdropActive: false,
            hiddenBackground: false,
            currentQuest: null,
            currentStep: null,
            novaVisible: true,
            step: null,
            novaReady: false,
            novaTop: 0,
            novaLeft: 0,
            novaMaxWidth: 600,
            body: null,
            finishedQuests: [],
            quests: window.quests || {}
        };
    },
    methods: {
        /**
         * Wait for a condition to be true before executing a function.
         *
         * @param callable $isTrueFunction A function that returns a boolean value indicating whether the condition is true.
         * @param callable $toDoFunction A function to execute when the condition is true.
         */
        waitFor: function (isTrueFunction, toDoFunction) {
            var self = this;
            if (!isTrueFunction()) {
                setTimeout(function () {
                    self.waitFor(isTrueFunction, toDoFunction);
                }, 200);
                return;
            } else {
                toDoFunction();
            }
        },
        /**
         * Resets the z-index of an element with the given ID after a specified delay.
         *
         * @param string $id The ID of the element to reset the z-index for.
         * @param int $delay The delay (in milliseconds) before resetting the z-index.
         * @return void
         */
        resetZIndex: function(id, delay) {
            const el = document.getElementById(id);
            el.style.setProperty('z-index', '9999');
            setTimeout(() => el.style.removeProperty('z-index'), delay);
        },                       
        /**
         * Moves to the next step in the process.
         */
        nextStep: function() {
            if (this.step.fadeOutBody) {
                document.body.style.transition = "opacity 1s ease-in-out";
                document.body.style.opacity = "0";
            } else {
                document.body.style.transition = "opacity 1s ease-in-out";
                document.body.style.opacity = "1";
            }
            localStorage.setItem('isNovaTextVisible', this.isNovaTextVisible);
            this.currentStep++;            
            if (this.currentStep > this.quests[this.currentQuest].steps.length) {
                this.updateQuestStatus(this.currentQuest, this.currentStep, 1);
                return;
            }
            this.updateQuestStatus(this.currentQuest, this.currentStep);
            var step = this.quests[this.currentQuest].steps[this.currentStep - 1];
            if (step.startFunction) {
                console.log("running start function")
                try {
                    console.log(step)
                    console.log(step.startFunction)
                    step.startFunction(nova);
                } catch (e) {
                    console.log('Error in initFunction', e);
                }
            }

        },
        /**
         * Shows the current step asynchronously with a delay.
         *
         * @param int $delayOver The delay time in milliseconds.
         * @return void
         */
        showCurrentStep: async function(delayOver) {
            // Helper function to safely access nested properties
            const safeGet = (obj, path, defaultValue) => path.split('.').reduce((acc, key) => acc && acc[key] !== undefined ? acc[key] : defaultValue, obj);
            this.isNovaBlockVisible = false;
            this.isNovaTextVisible = false;
            await this.$nextTick();
            await new Promise(resolve => setTimeout(resolve, 500));

            const previousElement = document.querySelector('.nova-selected');
            if (previousElement) {
                previousElement.classList.remove('nova-selected');
                ['border', 'position', 'zIndex'].forEach(prop => previousElement.style[prop] = '');
                this.revertParentPosition(previousElement);
            }

            document.body.className = Array.from(document.body.classList).filter(cls => !cls.startsWith('nova_')).join(' ');
            if (this.currentQuest && this.currentStep) {
                document.body.classList.add(`nova_${this.currentQuest}_${this.currentStep}`);
            }

            const currentStepObj = safeGet(this.quests, `${this.currentQuest}.steps.${this.currentStep - 1}`, null);
            if (!currentStepObj) {
                Object.assign(this, { backdropActive: false, hiddenBackground: false, step: null, novaReady: false });
                return;
            }

            let step = { ...currentStepObj };
            if (step.pageMatcher instanceof RegExp) {
                if (step.pageMatcher.test(window.location.pathname)) {
                    step = step.otherPageMiniNova || step;
                } else if (step.page && !step.pageMatcher.test(window.location.pathname)) {
                    document.location.href = step.page;
                    return;
                }
            }

            const delay = safeGet(this.quests, `${this.currentQuest}.steps.${this.currentStep}.delay`, 0);
            if (delay && !delayOver) {
                setTimeout(() => this.showCurrentStep(true), delay);
                return;
            }

            this.backdropActive = step.hasOwnProperty('backdrop') ? step.backdrop : true;
            this.hiddenBackground = step.hasOwnProperty('hiddenBackground') ? step.hiddenBackground : false;
            this.step = step;
            this.novaReady = false;

            if (step.highlightedElement) {
                const show = () => {
                    const selectedElement = document.querySelector(step.highlightedElement);
                    if (selectedElement) {
                        selectedElement.classList.add('nova-selected');
                        this.setParentPosition(selectedElement);
                        selectedElement.style.position = selectedElement.classList.contains('modal') ? '' : 'relative';
                        selectedElement.style.zIndex = '1032';
                    }

                    if (step.initFunction) {
                        try { step.initFunction(this); } catch (e) { console.error('Error in initFunction', e); }
                    }
                };

                document.readyState === 'loading' ? document.addEventListener('DOMContentLoaded', show) : setTimeout(show, 20);
            }

            this.isNovaTextVisible = true;
            this.isNovaBlockVisible = true;
        },   
        /**
         * Reverts the parent position of an element.
         *
         * @param mixed $element The element to revert the parent position of.
         * @return void
         */
        revertParentPosition: function(element) {
            var parent = element.parentElement;            
            while (parent) {            
                if (parent.classList.contains('position-fixed') || parent.classList.contains(
                        'position-sticky') || parent.classList.contains('fixed-top') || parent.classList
                    .contains('sticky-top') || Array.from(parent.classList).some(cls => cls.startsWith(
                        'z-'))) {
                    parent.style.removeProperty('position');
                    parent.style.removeProperty('z-index');
                }
                parent = parent.parentElement;
            }
        },
        /**
         * Sets the parent position of an element.
         *
         * @param mixed $element The element to set the parent position for.
         * @return void
         */
        setParentPosition: function(element) {
            var parent = element.parentElement;            
            while (parent) {                
                if (parent.classList.contains('position-fixed') || parent.classList.contains(
                        'position-sticky') || parent.classList.contains('fixed-top') || parent.classList
                    .contains('sticky-top') || Array.from(parent.classList).some(cls => cls.startsWith(
                        'z-'))) {
                    parent.style.setProperty('position', 'relative', 'important');
                    parent.style.setProperty('z-index', 'auto',
                        'important');
                }
                parent = parent.parentElement;
            }
        },   
        /**
         * Starts a new quest.
         *
         * @param string $quest The name of the quest to start.
         * @return void
         */
        startQuest: function(quest) {
            this.currentStep = null;
            this.libraryClose();
            this.currentQuest = quest;
            this.currentStep = 1;
            this.isNovaBlockVisible = true;  
            this.loadAnimation();
            this.updateQuestStatus(this.currentQuest, this.currentStep);
                      
        },
        /**
         * Checks if a quest is completed.
         *
         * @param int $questId The ID of the quest to check.
         * @return bool Returns true if the quest is completed, false otherwise.
         */
        isQuestCompleted(questId) {
            return this.finishedQuests.includes(questId);
        },
        /**
         * Updates the status of a quest.
         *
         * @param int $questNumber The number of the quest to update.
         * @param int $step The step of the quest to update.
         * @param bool $finished Whether the quest has been finished or not.
         * @return void
         */
        updateQuestStatus: function(questNumber, step, finished) {
            var formData = new FormData();
            formData.append('quest', questNumber);
            formData.append('step', step);
            if (finished) formData.append('finished', 1);
            fetch('/nova/status', {
                method: 'post',
                body: formData,
                keepalive: true
            });
        },                     
        groupQuestsByLevel: function() {
            const qgroups = {};
            Object.keys(this.quests).forEach(key => {
                const group = this.quests[key].level;
                if (!qgroups[group]) qgroups[group] = [];
                qgroups[group].push(key);
            });
            return qgroups;
        },        
        libraryOpen: function() {
            this.showLibrary = true;
            this.populateLibrary();
            document.body.style.overflow = 'hidden';
        },
        libraryClose: function() {
            this.showLibrary = false;
            document.body.style.removeProperty('overflow');
            this.resetZIndex('nova-library', 500);
        },
        populateLibrary: function() {
            let body = '';

            // Group quests by their 'level'
            const qgroups = {};
            Object.keys(this.quests).forEach((key) => {
                const group = this.quests[key].level;
                if (!qgroups[group]) qgroups[group] = [];
                qgroups[group].push(key);
            });

            // Generate HTML with Bootstrap classes
            Object.keys(qgroups).forEach((key) => {
                const quests = qgroups[key];
                let completedCount = 0;

                quests.forEach((questKey) => {
                    if (this.finishedQuests.includes(questKey)) {
                        completedCount++;
                    }
                });

                let subhead = '';
                if (key === 'Beginner') subhead = 'Getting Started';
                if (key === 'Intermediate') subhead = 'Lesson Design & Management';
                if (key === 'Advanced') subhead = 'Collaboration & Sharing';

                const allCompletedCheck = (completedCount === quests.length) ? '<i class="far fa-check-circle"></i>' : '';

                body += `<div class="row mb-5">`;

                body += `<div class="col-12">`;
                body += `<h6 class="font-weight-bold text-uppercase text-sm text-white mb-1">${key}</h6>`;
                body += `<h4 class="font-weight-bold text-white mb-3">${subhead} <span class="d-inline-block font-weight-normal ml-3 text-gray-300">${allCompletedCheck} ${completedCount} of ${quests.length} completed</span></h4>`;
                body += `</div>`;

                quests.forEach((questKey) => {
                    const quest = this.quests[questKey];
                    const isFinished = this.finishedQuests.includes(questKey);
                    const checkMark = isFinished ? '<div class="mt-auto text-gray-300"><i class="far fa-check-circle"></i></div>' : '<div class="mt-auto text-gray-300"><i class="far fa-circle mr-1"></i> <span class="text-sm font-weight-bold">Incomplete</span></div>';

                    body += `<div class="col-sm-6 col-md-4 mb-3">`;
                    body += `<a href="#" class="quest-card text-white font-weight h-100" onclick="nova.startQuest('${questKey}')">`;
                    body += `<div class="d-flex flex-column align-items-stretch border-2 border border-white rounded-lg px-3 pt-4 pb-3 h-100">`;
                    body += `<h4 class="text-white font-weight-bold mb-2">${quest.name}</h4>`;
                    body += `${checkMark}`;
                    body += `</div>`;
                    body += `</a>`;
                    body += `</div>`;
                });

                body += `</div>`;
            });

            // Attach body to the inside of #nova-library-content
            document.getElementById('nova-library-content').innerHTML = body;    
            console.log('LIBRARY POPULATED');                 
        },        
        reset: function() {
            fetch('/nova/reset', {
                method: 'post',
                keepalive: true
            }).then(function() {
                document.location = '/folders';
            });
        },
        showBody: function() {
            // Wait for all assets to load
            window.onload = () => {
                // Fade in the body
                setTimeout(() => {
                    document.body.style.transition = "opacity 1s ease-in-out";
                    document.body.style.opacity = "1";
                }, 0);           
            };
        },
        beforeEnter: function(el) { 
            el && (el.style.opacity = 0); 
        },
        enter: function(el, done) { 
            el.style.opacity = 1; 
            done();
        },
        afterEnter: function() { 
            console.log('Animation complete'); 
        },        
        beforeEnterSlide(el) {
            // Code for second transition
        },
        enterSlide(el, done) {
            // Code for second transition
        },
        afterEnterSlide(el) {
            // Code for second transition
        },
        loadAnimation: function() {
            this.$nextTick(() => {
                const novaDot = document.getElementById('nova-dot');
                if (novaDot) {
                    const existingAnimationElement = novaDot.querySelector('svg');
                    if (!existingAnimationElement) {
                        let animation = lottie.loadAnimation({
                            container: document.getElementById('nova-dot'),
                            renderer: 'svg',
                            loop: true,
                            autoplay: true,
                            path: '/assets/lottie/nova-pulse.json'
                        });
                        console.log('LOTTIE INITIALIZED');
                    }                    
                } 
            });                
        },  
        toggleSpin: function() {
            const novaDot = document.getElementById('nova-dot');
            novaDot.classList.toggle('spin');
            setTimeout(() => novaDot.classList.toggle('spin'), 1000);
        },
        novaDotClicked: function() {
            if (this.currentQuest || this.showLibrary) {
                this.novaReady = this.step = this.showLibrary = false;
                return;
            }
            const qgroups = this.groupQuestsByLevel();
            this.showLibrary = true;
        },
        initConfetti: function() {
            var el = document.getElementById('confetti')
            installConfetti(el);
        }      
    },
    watch: {
        currentStep: function(newVal, oldVal) {
            if (oldVal == null) {
                if (this.currentStep > 0) {
                    if (this.quests && this.currentQuest && this.quests[this.currentQuest]) {
                        const steps = this.quests[this.currentQuest].steps;
                    
                        if (steps) {
                            var step = this.quests[this.currentQuest].steps[this.currentStep - 1];
                            if (step.preparationCallback) {
                                step.preparationCallback(this.showCurrentStep);
                            }
                        }
                        // this.isNovaBlockVisible = true;
                    }
                 
                }
            } 
        },
        currentQuest: function() {
            this.showCurrentStep();            
        },    
        step: function() {
            this.loadAnimation();
        },        
    },
    computed: {
        totalSteps() {
            return this.quests[this.currentQuest].steps.length;
        }
    },
    mounted: function() {        
        if (!this.isQuestCompleted(1) && this.currentQuest !== 1) {
            setTimeout(() => {
                this.startQuest(1);
            }, 3000);
        }
        
        if (this.currentStep) {            
            this.isNovaBlockVisible = true;
            this.loadAnimation();
        } else {
            this.isNovaBlockVisible = false;
        }        
        document.body.style.opacity = "0";
        this.showBody();
    },
    created() {       
        this.isNovaTextVisible = localStorage.getItem('isNovaTextVisible') === 'true';      
    },
});
<?php
    if (!empty($user['id'])) {
        $__quests = ORM::for_table('users_quests')
            ->where('user_id', $user['id'])
            ->findMany();

        $__finished = [];
        $__current_quest = null;
        foreach ($__quests as $__q) {
            if (!$__q->finished) $__current_quest = $__q;
            $__finished[] = $__q->quest;
        }

        echo 'nova.finishedQuests = ' . json_encode($__finished) . ';';

        if ($__current_quest) {
            echo 'nova.currentQuest = ' . $__current_quest->quest . ';';
            echo 'nova.currentStep = ' . $__current_quest->step . ';';
        }
    }
    ?>
</script>
