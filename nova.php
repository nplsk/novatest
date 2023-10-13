<style>
.during-nova {
    overflow: hidden;
}
.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to {
  opacity: 0;
}
.nova_1_4 .nova-button-step {
    opacity: 0;
    display: none;
}
.nova_1_4.during-nova .nova-selected {
    animation: none;
}
#qctbardiv.nova-selected .qct-card[style] *,
#opening.nova-selected * {
    color: white !important;
}

.during-nova .modal-backdrop.show,
.nova_1_3 .modal-backdrop.show,
.nova_1_4 .modal-backdrop.show {
    opacity: 0;
    display: none;
}
.nova_1_2 #qctbardiv,
.nova_3_1 #qctbardiv {
    overflow: hidden;
}
.during-nova #qctModal .close-button,
.nova_1_3 #qctModal .close-button,
.nova_1_4 #qctModal .close-button {
    display: none;
}

.nova_1_3 #qctModal #pollit-1,
.nova_1_4 #qctModal #pollit-1,
.during-nova #qctModal #pollit-1,
.nova_1_3 #qctModal #checkit-2,
.nova_1_4 #qctModal #checkit-2,
.during-nova #qctModal #checkit-2 {
    opacity: 0.5;
    pointer-events: none;
}


.nova_1_6.during-nova #nova-block,
.nova_1_7.during-nova #nova-block {
    height: 140px;
}


.nova_1_10.during-nova #nova-clear {
    width: 25%;
    right: initial;
}
.nova_1_10.during-nova nav.fixed-top {
    pointer-events: none;
}

.nova_1_10.during-nova #buildit_iframe {
    padding-bottom: 200px;
}

.nova_1_10.during-nova .nova-selected {
    z-index: 9999;
}

#buildit_edit.nova_1_6.during-nova #nova-block {
    height: 200px;
}

.during-nova .nova-ignore {
    pointer-events: none;
}

.during-nova #qctModalContent #checkit-0 {
    opacity: 0.5;
    pointer-events: none;
}

.during-nova #launch-buttons #launch-teams-lesson {
    opacity: 0.5;
    pointer-events: none;
}

.during-nova #launchDropdownContainer {
    box-shadow: none!important;
}

.during-nova #launch-buttons #launch-assigned-lesson {
    opacity: 0.5;
    pointer-events: none;
}

.during-nova #liveToolsModal #teacher-tool-share {
    opacity: 0.5;
    pointer-events: none;
}

.during-nova #liveToolsModal #teacher-tool-close {
    opacity: 0.5;
    pointer-events: none;
}

.during-nova #liveToolsModal #teacher-tool-gallery {
    opacity: 0.5;
    pointer-events: none;
}

.during-nova #liveToolsModal #teacher-tool-timer {
    opacity: 0.5;
    pointer-events: none;
}

.during-nova #liveToolsModal #teacher-tool-nav {
    opacity: 0.5;
    pointer-events: none;
}

.during-nova #liveToolsModal #teacher-tool-teams {
    opacity: 0.5;
    pointer-events: none;
}

.during-nova #liveToolsModal #teacher-tool-results {
    opacity: 0.5;
    pointer-events: none;
}

.during-nova #liveToolsModal #teacher-tool-close-lesson {
    opacity: 0.5;
    pointer-events: none;
}

.during-nova #liveToolsModal #teacher-tool-download {
    opacity: 0.5;
    pointer-events: none;
}

.during-nova #endAssignmentModal #lesson-close-cancel {
    opacity: 0.5;
    pointer-events: none;
}

.mini-nova {
    background: transparent linear-gradient(180deg, #3d4a51 0%, #39454c 15%, #0c0f105f 100%) 0% 0% no-repeat padding-box;
    z-index: 1033;
    -webkit-backdrop-filter: blur(10px);
    backdrop-filter: blur(10px);
    border-radius: 8px;
    padding: 30px !important;
}

.during-nova.nova_3_1 .nova-selected,
.during-nova.nova_3_1 .nova-selected .text-gray-800 {
    color: #fff !important;
}


#nova-dot {
    width: 100px;
    height: 100px;
    position: absolute;
    left: -100px;    
    margin:auto;
    top: -30px;
    z-index: 1055;
    opacity: 1;
    transition: all 300ms ease;
    animation: fade-in 1s cubic-bezier(0.37, 0, 0.63, 1), hover-animation 3s infinite cubic-bezier(0.37, 0, 0.63, 1);    
}

@keyframes spin {
    0% {
       transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

#nova-dot.spin svg {
    /* windup animation */
    animation: spin 1s cubic-bezier(0.36, 0, 0.66, -0.56);
}


@keyframes fade-in {
    0% {
        opacity: 0;
        top: -20px;
    }
    100% {
        opacity: 1;
        top: -30px;
       
    }
}


#nova-dot svg {
    z-index: 1056;
}

#nova-dot::before {
    content: '';
    display: block;
    position: absolute;
    width: 96px;
    height: 96px;
    top: 4px;
    left: 2px;
    opacity: 1;
    background-color: rgba(150, 150, 150, 0.1);
    border-radius: 50%;
    animation: shadow-animation 3s infinite cubic-bezier(0.37, 0, 0.63, 1);
}


@media (max-width: 835px) {
    #nova-dot {        
        top: -80px;
    }
}




@keyframes hover-animation {

    0%,
    100% {
        transform: translateY(0) scale(1);
    }

    50% {
        transform: translateY(-4px) scale(1.1);
    }
}

@keyframes shadow-animation {

    0%,
    100% {
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.4);
    }

    50% {
        box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.7);
    }
}

@keyframes selected-hover-animation {

    0%,
    100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-4px);
    }
}

@keyframes selected-shadow-animation {

    0%,
    100% {
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
    }

    50% {
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.6);
    }
}

#nova-box {
    z-index: 1033;
    line-height: 1.4;
    padding: 10px;
    padding-top: 150px;
}

#nova-smoke {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: transparent linear-gradient(180deg, #3D4A51B2 0%, #39454CA7 50%, #0C0F105F 100%) 0% 0% no-repeat padding-box;
    z-index: 1032;
    -webkit-backdrop-filter: blur(2px);
    backdrop-filter: blur(2px);
}

#nova-clear {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    background: transparent;
    z-index: 1032;
}



#nova-block {
    width: 100%;
    height: 200px;
    background: transparent linear-gradient(180deg, rgba(35, 42, 47, .9) 0%, rgba(43, 53, 59, .9) 43%, rgba(50, 60, 66, .9) 100%) 0% 0% no-repeat padding-box;
    box-shadow: 0px -3px 6px rgba(0, 0, 0, 0.16);
    backdrop-filter: blur(8px);
    display: flex;
    -webkit-backdrop-filter: blur(8px);
    transition: all 300ms ease;
}

#nova-text {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    /* margin: auto; */
    width: 768px;
    padding: 24px 24px 0 24px;
    position: relative;
    /* overflow: scroll; */
}


#nova-text .quest-label {
    background: rgba(255, 255, 255, 0.1) 0% 0% no-repeat padding-box;
    border-radius: 4px;
    color: #fff;
    padding: 4px;
    font-size: 11px;
    letter-spacing: 0.33px;
    margin-bottom: 8px;
    text-transform: uppercase;
    font-weight: 500;
    display: inline-block;
    line-height: 1;
    position: relative;
    z-index: 1051;
}

#nova-text h4 {
    font-weight: 700;
}

#nova-block .btn {
    margin-top: auto;
    overflow: hidden;
    white-space: nowrap;
    background: transparent linear-gradient(180deg, rgba(3, 201, 198, 1) 0%, rgba(0, 198, 198, 1) 100%) 0% 0% no-repeat padding-box;
    box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
    border-color: #126766;
    position: relative;
    z-index: 2;
}

#nova-block-body {
    /* overflow-y: auto; */
    /* height: calc(100% - 40px); */
    /* padding-bottom: 20px; */
    padding-top: 5px;
    font-size: 16px;
    color: #fff;
    position: relative;
    /* -webkit-mask-image: linear-gradient(to bottom, transparent 0%, black 0%, black 60%, transparent 100%);
    mask-image: linear-gradient(to bottom, transparent 0%, black 5%, black 60%, transparent 100%); */
}

#nova-block-body p:only-child {
    margin-bottom: 0;
}


.nova_1_1 #nova-block-body {
    mask-image: none;
    -webkit-mask-image: none;
}

.nova_1_1 #nova-text {
    height: 100%;
}
#nova-block .btn.nova-button-step {
    transition: all 300ms ease;
}
#nova-block .btn.nova-button-step:hover {
    transform: translateY(-2px);
    box-shadow: 0px 3px 16px rgba(0, 0, 0, 0.7);
}

#lesson-join-details.nova-selected {
    border-radius: 4px;
}

.nova-selected {
    animation: selected-hover-animation 3s infinite cubic-bezier(0.37, 0, 0.63, 1),
        selected-shadow-animation 3s infinite cubic-bezier(0.37, 0, 0.63, 1);
}

.nova_1_2 .nova-selected,
.nova_3_1 .nova-selected {
    animation: none;
}

.nova_1_9 .nova-selected {
    animation: none;
}

.nova_1_11 .nova-selected {
    animation: selected-hover-animation 3s infinite cubic-bezier(0.37, 0, 0.63, 1);
}
.nova_1_11 .nova-selected .card {
    animation: selected-shadow-animation 3s infinite cubic-bezier(0.37, 0, 0.63, 1);
}

body.nova_1_2 .nova-selected .card,
body.nova_3_1.during-nova .nova-selected > .card.shadow-sm[style] {    
    animation: selected-hover-animation 3s infinite cubic-bezier(0.37, 0, 0.63, 1),
        selected-shadow-animation 3s infinite cubic-bezier(0.37, 0, 0.63, 1) !important;
}

/* #lesson-join-details.nova-selected::before {
    content: '';
    display: block;
    position: absolute;
    height: 100p%
    animation: ;
} */

#nova-library {
    position: fixed; 
    display: flex;
    height: 100%;
    width:100%;     
    align-items:flex-start;
    justify-content:center; 
    z-index: 2000; 
    background: transparent linear-gradient(180deg, rgba(35, 42, 47, .9) 0%, rgba(43, 53, 59, .9) 43%, rgba(50, 60, 66, .9) 100%) 0% 0% no-repeat padding-box;    
    backdrop-filter: blur(0);
    -webkit-backdrop-filter: blur(0);
    transition: opacity 500ms ease, backdrop-filter 500ms ease, -webkit-backdrop-filter 500ms ease;
    z-index: -1;
    opacity: 0;
}
#nova-library.open {    
    z-index: 9999;
    opacity: 1;
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
}
#nova-library-content .quest-card {
    color: #fff;
    display: block;
    transition: all 300ms ease;
    transform: scale(1);
}
#nova-library-content .quest-card:hover {
    transform: scale(1.05);
}

#nova-block.slide-up {
  bottom: 0;
  transition: bottom 0.5s ease-in-out;
}

#nova-block {
  bottom: -50%; /* Adjust this value based on the actual height of #nova-block */
  transition: bottom 0.5s ease-in-out;
}


</style>

<div id="nova-container" v-cloak>
    <!-- <div class="bg-teal h-32 position-relative">
        <canvas id="confetti" class="h-100 w-100 position-absolute left-0 top-0"></canvas>
    </div> -->
    <div class="text-right text-uppercase position-absolute top-0 left-0" style="z-index: 9999">
        <button @click="reset">Reset Nova</button>
        <!-- <button @click="startQuest(1)">Intro Q</button>
        <button @click="startQuest(2)">Nova IQ1</button>
        <button @click="startQuest(3)">Nova IQ2</button>
        <button @click="startQuest(4)">Nova IQ3</button> -->
        
    </div>
    <div id="nova-launcher" @click="libraryOpen" class="btn btn-secondary"
        style="position: fixed; bottom: 8px; right: 8px; z-index: 1030;">Nova</div>

    <template v-if="step">
        <div id="nova-smoke" v-if="backdropActive"></div>
        <div id="nova-clear" v-if="hiddenBackground"></div>
        <div id="nova-block" :class="{ 'slide-up': isNovaBlockVisible }" class="position-fixed left-0 right-0" style="z-index: 1051;">
            <div class="d-flex mx-auto position-relative">
                <div id="nova-dot" @click="toggleSpin"></div>
                
                    <div id="nova-text" ref="novaText">
                        
                            <div>
                                <div class="d-flex mb-1 align-items-center">
                                    <div class="quest-label font-weight-bold" v-html="quests[currentQuest].name"></div> 
                                    <div class="quest-label ml-1">Step {{ currentStep }} of {{ totalSteps }}</div>
                                
                                </div>
                                <transition name="fade">
                                    <div v-if="isVisible">
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
<script src="/assets/js/vendor/confetti.js"></script>
<script>
var nova = new Vue({
    el: '#nova-container',
    props: {
        novaPosition: {
            type: Object,
            default: function() {
                return {
                    top: '',
                    left: '',
                    bottom: '',
                    right: ''
                }
            }
        }
    },
    data: function() {
        return {
            isVisible: true,
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
            quests: {
                1: {
                    level: 'Beginner',
                    name: 'Getting Started',
                    steps: [{
                            // delay: 400,
                            title: 'Hey there, <?= h($user['first_name'] ?: 'Friend') ?>!',
                            body: '<p>Welcome to THiNKTech! I\'m Nova, your fabulous teaching sidekick. In just a few minutes, I\'ll have you seamlessly running lesson plans with our awesome tool and turning your classes into collaborative learning centers.</p>',
                            page: "/folders",
                            pageMatcher: /\/folders$/,
                            continueButton: 'Let\'s Go',

                        },
                        { // this has a continue button to move to the next step.
                            title: 'Click the Opening Activity template',
                            body: '<Picture>From effortless anticipatory sets to exit tickets, THiNKTech is your backstage pass to dazzle your students. <strong>Picture this:</strong> you, using our quick-create templates to whip up tailored tasks for your class! With THiNKTech your students will be cheering for more!</p>',
                            highlightedElement: "#opening",
                            initFunction: function(nova) {
                                document.getElementById('opening').addEventListener('click',
                                    function(e) {
                                        nova.nextStep();
                                    });
                            },
                            page: "/folders",
                            pageMatcher: /\/folders$/,
                        },
                        {
                            title: 'Create a Think iT',
                            body: '<p>Today\'s mission:  let\'s dive into <strong>Think iT</strong> and create some word cloud magic together. Think of this as our warm-up lap on the THiNKTech race track. Once we nail this, you\'ll be zooming through all of our awesome tools, making your teaching life easier (which is why I\'m here).</p>',
                            highlightedElement: "#qctModalContent",
                            continueButton: null,
                            page: "/folders",
                            pageMatcher: /\/folders$/,
                            preparationCallback: function(nextStep) {
                                // this is called when the page loads if we aren't starting on the previous step
                                document.addEventListener('DOMContentLoaded', function(e) {
                                    document.getElementById('opening').click();
                                    // setTimeout(nextStep, 500);
                                })
                            },
                            initFunction: function(nova) {
                                document.querySelector('#thinkit-0 button').addEventListener(
                                    'click',
                                    function(e) {
                                        nova.nextStep();
                                    });
                            },
                        },
                        {
                            title: 'Here\'s where you add your content',
                            body: '<p>This is where you\'ll add/format your question, and after this quest you\'ll be free to sprinkle in some multimedia magic. Here\'s a tip: When creating a THiNK iT, aim for questions that get one or two-word responses. That\'s the best way to create a word cloud.</p>',
                            highlightedElement: "#taskIframe",
                            continueButton: "Next step",
                            delay:1000,
                            hiddenBackground: true,                           
                            initFunction: function() {
                                
                                // Function to create the backdrop
                                function createBackdrop(iframe, dom) {
                                    const rect = iframe.getBoundingClientRect();
                                    const top = rect.top * -1;
                                    const backdrop = dom.createElement('div');
                                    backdrop.innerHTML = `<div id="nova-backgroup-q1-s4" style="position: fixed; width: 100%; height: calc(100% + ${top * -1}px); top: 0; z-index: 1032; background: transparent linear-gradient(180deg, #3D4A51B2 0%, #39454CA7 50%, #0C0F105F 100%) 0% 0% no-repeat padding-box; -webkit-backdrop-filter: blur(2px); backdrop-filter: blur(2px); background-position: 0px ${top}px"></div>`;
                                    dom.body.appendChild(backdrop);
                                    console.log("Div has been appended:", backdrop);

                                    //code to move #nova-clear z-index to 1033
                                    const clear = document.getElementById('nova-clear');
                                    clear.style.setProperty('z-index', '1033', 'important');
                                }

                                // Function to setup the editor
                                function setupEditor(dom) {
                                    const editor = dom.querySelector('#question_field').parentNode;
                                    nova.setParentPosition(editor);
                                    editor.classList.add('nova-selected');
                                    editor.style.setProperty('z-index', '1033', 'important');
                                    editor.style.setProperty('padding', '0px', 'important');
                                    editor.style.setProperty('box-shadow', '0 0 20px rgba(0,0,0,0.3)', 'important');
                                    editor.style.position = 'relative';
                                    editor.style.backgroundColor = 'white';
                                }

                                // Function to setup the select input
                                function setupSelect(dom, iframe) {
                                    const select = dom.querySelector('#number_answers');
                                    select.value = 5;
                                    select.dispatchEvent(new Event('input'));
                                    iframe.contentWindow.postMessage({ action: 'updateSelect', value: 5 }, '*');
                                }

                                // Function to type text into a text area
                                function typeTextInto(ta, question, btn) {
                                    let idx = 0;
                                    const type = function () {
                                        console.log("Typing");
                                        const cur = ta.innerHTML;
                                        if (cur.indexOf(question) > -1) {
                                            return;
                                        }
                                        ta.innerHTML += question.charAt(idx++);
                                        if (idx < question.length) {
                                            setTimeout(type, Math.floor(Math.random() * 150));
                                        } else {
                                            console.log("Done typing");
                                            btn.style.opacity = 1;
                                            btn.style.display = 'block';
                                        }
                                    };
                                    setTimeout(type, 600);
                                }


                               
                                const iframe = document.getElementById('taskIframe');
                                const dom = iframe.contentWindow ? iframe.contentWindow.document : iframe.contentDocument;
                                const btn = document.querySelector('.nova-button-step');
                                                                
                                // Wait for #question_field to be available
                                nova.waitFor(function() {
                                    return dom.querySelector('#js-wysiwyg-editor .ql-editor p') !== null;
                                }, function() {
                                    // Continue the rest of the setup
                                    
                                    
                                    const ta = dom.querySelector('#js-wysiwyg-editor .ql-editor p');
                                    const question = 'Use your knowledge of science to identify 5 elements off the periodic table.';
                                    
                                    createBackdrop(iframe, dom);
                                    setupEditor(dom);
                                    setupSelect(dom, iframe);
                                    typeTextInto(ta, question, btn);

                                    if (ta.innerHTML == question) {
                                        btn.style.opacity = 1;
                                        btn.style.display = 'block';
                                    }
                                });

                                

                            }
                        },
                        {
                            title: 'Click the Preview button (top right!)',
                            body: '<p>Want to see what your students will see once you launch this lesson? Anytime you\'re creating, go ahead and click preview to see what your students will see in your live lessons.</p>',
                            highlightedElement: "#previewLesson",
                            backdrop: true,
                            initFunction: function() {
                                // Function to remove properties
                                function removeStyles(element, properties) {
                                    properties.forEach(prop => {
                                        element.style.removeProperty(prop);
                                    });
                                }

                                // Function to clean up iframe and its parents
                                function cleanUpIframe(iframe, dom) {
                                    const elementsToClean = [
                                        iframe,
                                        iframe.parentElement,
                                        iframe.parentElement.parentElement,
                                        iframe.parentElement.parentElement.parentElement,
                                        iframe.parentElement.parentElement.parentElement.parentElement
                                    ];
                                    elementsToClean.forEach(el => removeStyles(el, ['z-index', 'position']));
                                    
                                    const editor = dom.querySelector('#question_field').parentNode;
                                    removeStyles(editor, ['box-shadow', 'z-index', 'padding', 'position', 'background-color']);
                                    editor.classList.remove('nova-selected');
                                }

                                // Function to remove backdrop
                                function removeBackdrop(dom) {
                                    const bd = dom.getElementById('nova-backgroup-q1-s4');
                                    bd.parentNode.removeChild(bd);
                                }

                                // Function to update select field
                                function updateSelectField(dom, iframe) {
                                    const select = dom.querySelector('#number_answers');
                                    select.value = 5;
                                    select.dispatchEvent(new Event('input'));
                                    iframe.contentWindow.postMessage({ action: 'updateSelect', value: 5 }, '*');
                                }

                                
                                function start() {
                                    const iframe = document.getElementById('taskIframe');
                                    const dom = iframe.contentWindow ? iframe.contentWindow.document : iframe.contentDocument;

                                    try { cleanUpIframe(iframe, dom); } catch (e) { }
                                    try { removeBackdrop(dom); } catch (e) { }
                                    try { updateSelectField(dom, iframe); } catch (e) { }

                                    document.querySelector('#previewLesson').addEventListener('click', async function(e) {
                                        await nova.nextStep();
                                    });
                                }
                               
                                start();
                            },
                          
                        },
                        {
                            title: 'Starting Your Lesson With Students',
                            body: '<p>Our live lesson feature empowers you to take charge by giving you different ways to bring your students in. Whether it\'s guiding students through activities in class, fostering teamwork through a guided team lesson, or providing flexible assignments, we have it all.</p>',
                            pageMatcher: /\/buildit\/[0-9]*$/,
                            continueButton: 'Next Step',
                            otherPageMiniNova :{
                                                pageMatcher: /\/buildit.*preview/,
                                                backdrop: false,
                                                hiddenBackground: true,
                                                highlightedElement: "#preview-close",
                                                title: "Checkout your Students view, then close out (top right, again!)",
                                                body: '<p>This is what your students will see on their screens. It\'s awesome to see your creativity come to life.</p>'
                            },
                            
                        },
                        {
                            title: 'Start a Live Lesson',
                            body: '<p>Go ahead and click <strong>Start on a Live Lesson</strong> so we can practice bringing students in.</p>',
                            highlightedElement: "#launchDropdownContainer",
                            startFunction: function() {
                                setTimeout(() => {
                                    document.getElementById('launchDropdown').click();
                                }, 10);

                            },
                            preparationCallback: function(nextStep) {
                                document.addEventListener('DOMContentLoaded', function(e) {
                                    document.getElementById('launchDropdown').click();
                                    setTimeout(() => {
                                        document.getElementById('launch-buttons')
                                            .style.setProperty('left', ' -300px',
                                                'important');
                                        document.getElementById('launch-buttons')
                                            .style.setProperty('top', '35px',
                                                'important');
                                    }, 20);
                                })
                            },
                            initFunction: function() {
                                document.addEventListener('DOMContentLoaded', function(e) {
                                    document.getElementById('launchDropdown').click();
                                    console.log("launchDropdown")
                                    setTimeout(() => {
                                        document.getElementById('launch-buttons')
                                            .style.setProperty('left', ' -300px',
                                                'important');
                                        document.getElementById('launch-buttons')
                                            .style.setProperty('top', '35px',
                                                'important');
                                        document.getElementById('launchDropdown')
                                            .style.setProperty('transform', 'none',
                                                'important');
                                    }, 20);
                                })
                                document.getElementById('launch-live-lesson').addEventListener(
                                    'click',
                                    function(e) {
                                        nova.nextStep();
                                    });
                            }
                        },
                        // {
                        //     title: 'Bring Your Students In',
                        //     body: '<p>Time to kickstart some student engagement! I have made it super simple to get your students joined in on the fun, all they need is the link and code. You can always click on the magnifying glass to project the lesson code on the big screen for everyone to join in.</p>',
                        //     highlightedElement: "#lesson-join-details",                                                      
                        //     initFunction: function() {
                        //         // var aid = document.location.href.replace(/.*buildit\/([0-9]*)\/live/, '$1');
                        //         // fetch('/buildit/' + aid + '/fakeStudents', { method: 'POST'})
                        //         //   .then(function () {
                        //         //    builditVue.updateData();                               
                        //         // })
                        //         document.querySelector('#appcues-showCodeFullScreen')
                        //             .addEventListener('click',
                        //                 function(e) {
                        //                     nova.nextStep();
                        //                 });
                        //     },
                        //     //TODO: figure out how to redirect to the build it page with the ID 
                        //     // page: "/buildit/${id}",
                        //     // pageMatcher: /\/buildit$/,
                        // },
                        // {
                        //     title: 'Share your Lesson Code',
                        //     body: '<p>Students can either copy and paste a URL. It\'s like a digital secret handshake to get the party started!</p>',
                        //     highlightedElement: "#lesson-join-screen",
                        //     backdrop: false,
                        //     preparationCallback: function(nextStep) {
                        //         document.addEventListener('DOMContentLoaded', function(e) {
                        //             document.getElementById('appcues-showCodeFullScreen')
                        //                 .click();
                        //         })
                        //     },
                        //     initFunction: function() {
                        //         var aid = document.location.href.replace(
                        //             /.*buildit\/([0-9]*)\/live/, '$1');
                        //         fetch('/buildit/' + aid + '/fakeStudents', {
                        //                 method: 'POST'
                        //             })
                        //             .then(function() {
                        //                 builditVue.updateData();
                        //             })
                        //         let copyButtonClicked = false;
                        //         document.querySelector('#lesson-join-copy').addEventListener(
                        //             'click',
                        //             function(e) {
                        //                 copyButtonClicked = true;
                        //                 document.getElementById('lesson-join-close').click();
                        //                 nova.nextStep();
                        //             });
                        //         document.querySelector('#lesson-join-close').addEventListener(
                        //             'click',
                        //             function(e) {
                        //                 if (!copyButtonClicked) {
                        //                     nova.nextStep();
                        //                 }
                        //             });
                        //     },
                        // },
                        {
                            title: 'View student responses in real time',
                            body: '<p>Welcome to your live teaching dashboard! A place where you\'ll be able to track tasks, monitor your students responses and even adjust your course on the fly. I\'ve gone ahead and put in some of my favorite students (we all have them, don\'t kid yourself) so you can see what this really looks like in action.</p>',                            
                            backdrop: false,
                            hiddenBackground: true,
                            continueButton: 'Next Step',
                        },
                        {
                            title: 'Interact with the Think iT Task',
                            body: '<p>From the dashboard, you\'ll be able to click into any task at any time to see the classroom progress, individual student responses and visuals for how everyone is doing. Based on your student responses for your Think iT question, this awesome word cloud will come to life.</p>',
                            highlightedElement: "#task-navigation",
                            backdrop: true,
                            hiddenBackground: false,
                            initFunction: function() {

                                document.querySelector('#task-navigation .card').style.opacity='1';
                                
                                document.querySelector('#task-navigation').addEventListener('click',
                                    function(e) {
                                        
                                        setTimeout(() => {
                                            nova.nextStep();
                                            document.querySelector('#task-navigation')
                                                .style.setProperty('z-index', '100',
                                                    'important');
                                        }, 500);


                                    });
                            }
                        },
                        {
                            title:'Check out the Word Cloud',
                            body: '<p>From the dashboard, you\'ll be able to click into any task at any time to see the progress, individual student responses and visuals for how the class is doing. Based on your student responses for your THiNKiT question, this awesome word cloud will come to life.</p>',
                            highlightedElement: "#buildit_iframe",
                            backdrop: true,
                            delay: 1000,
                            continueButton: 'Let\'s Continue',
                            preparationCallback: function(nextStep) {   
                                var iframe = document.querySelector('#buildit_iframe');
                                nova.waitFor(function() {
                                    return iframe.contentDocument.readyState === "complete";
                                }, function() {
                                    var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
                                    iframeDocument.querySelector('#download-cloud').style.setProperty('display', 'none', 'important');
                                });                        
                                document.querySelector('#task-navigation').style.setProperty(
                                    'z-index', '100', 'important');                                                              
                            },
                            initFunction: function() {
                                var iframe = document.querySelector('#buildit_iframe');
                                nova.waitFor(function() {
                                    return iframe.contentWindow && iframe.contentDocument && iframe.contentDocument.readyState === "complete";
                                }, function() {
                                    var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
                                    iframeDocument.querySelector('#download-cloud').style.setProperty('display', 'none', 'important');
                                });                                     
                                document.querySelector('#buildit_live_vue > .container-fluid').classList.remove('overflow-hidden');
                                document.querySelector('#buildit_iframe').style.setProperty("min-height", "100vh", "important");                                                           
                            }
                        },
                        {
                            title: 'Teacher Tools (top right, one last time!)',
                            body: '<p>Next, I\'ve put together some of my favorite teaching tools just for you. Need a timer? Got it. Want to dazzle with screen sharing? Go ahead. Dream of letting students take the wheel and explore their classmates\' responses? Consider it done!</p>',
                            highlightedElement: "#live-tools-button",
                            hiddenBackground: false,
                            backdrop: true,
                            initFunction: function() {
                                document.querySelector('#live-tools-button').style.pointerEvents =
                                    'all'
                                document.querySelector('#live-tools-button').addEventListener(
                                    'click',
                                    function(e) {
                                        nova.nextStep();
                                    });
                            }
                        },
                        // {
                        //     title: 'Download Results',
                        //     body: '<p>One of my favorites tools to highlight is downloading results. You will be able to export all of the data and student responses into a Excel file from todays lesson. You can use this data to update your records, collaborate with colleagues, or share student progress with parents and guardians</p>',
                        //     highlightedElement: "#liveToolsModal",
                        //     hiddenBackground: false,
                        //     preparationCallback: function(nextStep) {
                        //         document.addEventListener('DOMContentLoaded', function(e) {
                        //             document.getElementById('live-tools-button').click();
                        //         })
                        //         document.querySelector('#liveToolsModal.nova-selected').style
                        //             .pointerEvents = 'none'
                        //         document.querySelector(
                        //                 '.during-nova #liveToolsModal #teacher-tool-download').style
                        //             .opacity = '1'
                        //         document.querySelector(
                        //                 '.during-nova #liveToolsModal #teacher-tool-download').style
                        //             .pointerEvents = 'all'
                        //     },
                        //     initFunction: function() {
                        //         document.querySelector('#liveToolsModal.nova-selected').style
                        //             .pointerEvents = 'none'
                        //         document.querySelector(
                        //                 '.during-nova #liveToolsModal #teacher-tool-download').style
                        //             .opacity = '1'
                        //         document.querySelector(
                        //                 '.during-nova #liveToolsModal #teacher-tool-download').style
                        //             .pointerEvents = 'all'
                        //         document.querySelector('#teacher-tool-download').addEventListener(
                        //             'click',
                        //             function(e) {
                        //                 nova.nextStep();
                        //             });
                        //     }
                        // },
                        {
                            title: 'Close your Lesson',
                            body: '<p>By closing your lesson, students will no longer be able to submit responses. But dont worry, you will always be able to access the data and responses that were collected.</p>',
                            highlightedElement: "#liveToolsModal",
                            hiddenBackground: false,
                            preparationCallback: function(nextStep) {
                                document.addEventListener('DOMContentLoaded', function(e) {
                                    document.getElementById('live-tools-button').click();
                                })
                                if (document.querySelector('#liveToolsModal.nova-selected')) {
                                    document.querySelector('#liveToolsModal.nova-selected').style
                                        .pointerEvents = 'none'
                                    document.querySelector(
                                            '.during-nova #liveToolsModal #teacher-tool-download')
                                        .style.opacity = '0.5'
                                    document.querySelector(
                                            '.during-nova #liveToolsModal #teacher-tool-download')
                                        .style.pointerEvents = 'none'
                                    document.querySelector(
                                        '.during-nova #liveToolsModal #teacher-tool-close-lesson'
                                    ).style.opacity = '1'
                                    document.querySelector(
                                        '.during-nova #liveToolsModal #teacher-tool-close-lesson'
                                    ).style.pointerEvents = 'all'
                                }

                            },
                            initFunction: function() {
                                document.querySelector('#liveToolsModal.nova-selected').style
                                    .pointerEvents = 'none'
                                document.querySelector(
                                        '.during-nova #liveToolsModal #teacher-tool-download').style
                                    .opacity = '0.5'
                                document.querySelector(
                                        '.during-nova #liveToolsModal #teacher-tool-download').style
                                    .pointerEvents = 'none'
                                document.querySelector(
                                        '.during-nova #liveToolsModal #teacher-tool-close-lesson')
                                    .style.opacity = '1'
                                document.querySelector(
                                        '.during-nova #liveToolsModal #teacher-tool-close-lesson')
                                    .style.pointerEvents = 'all'
                                document.querySelector('#teacher-tool-close-lesson')
                                    .addEventListener('click',
                                        function(e) {
                                            document.getElementById('timerModal').style.zIndex =
                                                '99999'
                                            document.querySelector('#liveToolsModal.nova-selected')
                                                .style.zIndex = '1040'
                                        }
                                    );
                                document.querySelector('#lesson-close-close').addEventListener(
                                    'click',
                                    function(e) {
                                        nova.nextStep();
                                    }
                                );
                            }

                        },
                        {
                            //redirect to the dashboard page
                            title: 'Congratulations!',
                            body: '<p> You\'re now free to explore THiNkTech at your own pace and on your own terms. But don\'t worry, I\'ll be here to help you along should you need it!</p>',
                            continueButton: 'Complete Quest',
                            preparationCallback: function() {
                                if (!window.location.href.includes('/folders')) {
                                    document.addEventListener('DOMContentLoaded', function(e) {
                                        window.location.href = '/folders';
                                    })
                                }
                            },
                            initFunction: function(nextStep) {
                                if (!window.location.href.includes('/folders')) {
                                    document.addEventListener('DOMContentLoaded', function(e) {
                                        window.location.href = '/folders';
                                    })
                                }
                                this.initConfetti();
                            },
                        },

                    ]
                },
                2: {
                    level: 'Beginner',
                    name: 'Multi-Task Lessons and Settings',
                    steps: [{
                            //pause point intro - click on pause point button to continue
                            // delay: 400,
                            title: 'Pause Point',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "#add-pause-point",
                            backdrop: true,                            
                            initFunction: function(nova) {
                                //scroll to the bottom of the container to show the added pause point 
                                if (!window.location.href.includes('/folders')) {
                                    document.addEventListener('DOMContentLoaded', function(e) {
                                        window.location.href = '/folders';
                                    })
                                }
                                document.getElementById('add-pause-point').addEventListener('click',
                                    function(e) {
                                        nova.nextStep();
                                    });
                            },
                        },
                        {
                            //pause point descriptions - click on continue button 
                            title: 'Pause Point',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "#edit-side-bar",
                            continueButton: 'Let\'s Continue',
                        },
                        {
                            //feedback intro - click on feedback button to continue
                            delay: 400,
                            title: 'Feedback',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "#add-feedback",
                            backdrop: false,
                            elementCorner: "bottom-left",
                            tooltipCorner: "bottom-left",
                            fixedOffset: {
                                top: -290,
                                right: 400
                            },
                            initFunction: function(nova) {
                                document.getElementById('add-feedback').addEventListener('click',
                                    function(e) {
                                        nova.nextStep();
                                    });
                            },
                        },
                        {
                            //pause point descriptions - click on continue button 
                            title: 'Feedback',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "#edit-side-bar",
                            continueButton: 'Let\'s Continue',
                        },
                        { // this has a continue button to close out the lesson. Option to either add info to the question or click preview .
                            title: 'Lesson Details',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "#previewLesson",
                            elementCorner: "top-right",
                            tooltipCorner: "top-right",
                            backdrop: false,
                            continueButton: 'Mark Quest Completed',
                            fixedOffset: {
                                top: -15,
                                right: 100
                            },
                        },
                    ]
                },
                3: {
                    level: 'Intermediate',
                    name: 'Add CBT Tools to your Lesson',
                    steps: [{ //CBT intro on /folders click CBT template to continue 
                            title: 'Create a CBT from Template',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "#cbt",
                            elementCorner: "top-right",
                            tooltipCorner: "top-left",
                            initFunction: function(nova) {
                                document.getElementById('cbt').addEventListener('click',
                                    function(e) {
                                        nova.nextStep();
                                    });
                            },
                            page: "/folders",
                            pageMatcher: /\/folders$/,
                        },
                        { //Choose quizit button to continue
                            title: 'Choose A QuizIt',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "#qctModalContent",
                            page: "/folders",
                            pageMatcher: /\/folders$/,
                            preparationCallback: function(nextStep) {
                                document.addEventListener('DOMContentLoaded', function(e) {
                                    document.getElementById('cbt').click();
                                    setTimeout(nextStep, 500);
                                })
                            },
                            initFunction: function(nova) {
                                document.querySelector('#quizit-1 button').addEventListener(
                                    'click',
                                    function(e) {
                                        nova.nextStep();
                                    });
                            },
                        },
                        { //open settings 
                            title: 'Open Settings',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',                           
                            backdrop: true,
                            highlightedElement: "#open-settings",
                            initFunction: function(nova) {
                                const elem = document.getElementById('open-settings');
                               
                                elem.style.setProperty(
                                    'background-color', 'white', 'important');
                                elem.style.setProperty(
                                    'border-radius', '8px', 'important');
                                elem.addEventListener('click',
                                    function(e) {
                                        setTimeout(nova.nextStep(), 20);
                                    });
                            },
                        },
                        { //enable CBT                            
                            title: 'Enable CBT tools',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "#lesson-settings-modal",
                            backdrop: true,
                            preparationCallback: function(nextStep) {
                                document.addEventListener('DOMContentLoaded', function(e) {
                                    document.getElementById('open-settings').click();
                                })
                            },
                            initFunction: function(nova) {
                                document.getElementById('cbt').addEventListener('change',
                                    function(e) {
                                        nova.nextStep();
                                    });
                            },
                        },
                        { //select subject
                            delay: 400,
                            title: 'Select a Subject',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "select #subject",
                            backdrop: false,
                            preparationCallback: function(nextStep) {
                                document.addEventListener('DOMContentLoaded', function(e) {
                                    document.getElementById('open-settings').click();
                                })
                            },
                            initFunction: function(nova) {
                                document.getElementById('subject').addEventListener('change',
                                    function(e) {
                                        nova.nextStep();
                                    });
                            },
                        },
                        { //select grade level
                            delay: 400,
                            title: 'Select a Grade Level',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "select #open-settings",
                            backdrop: false,
                            preparationCallback: function(nextStep) {
                                document.addEventListener('DOMContentLoaded', function(e) {
                                    document.getElementById('open-settings').click();
                                })
                            },
                            initFunction: function(nova) {
                                document.getElementById('open-settings').addEventListener('click',
                                    function(e) {
                                        nova.nextStep();
                                    });
                            },
                        },
                        {
                            //screen can be clicked at this point, clicking preview is optional but highlighted. Continue button eds the quest
                            title: 'Preview/Wrap up',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "#previewLesson",
                            elementCorner: "bottom-left",
                            tooltipCorner: "bottom-left",
                            backdrop: false,
                            continueButton: 'Mark Quest Completed',
                        },
                    ]

                },
                4: {
                    level: 'Intermediate',
                    name: 'Active Lessons ',
                    steps: [{
                            title: 'Moving lessons from open to archive',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "#classActions",
                            elementCorner: "top-right",
                            tooltipCorner: "top-left",
                            backdrop: false,
                            initFunction: function(nova) {
                                document.getElementById('lesson-close-modal').addEventListener(
                                    'click',
                                    function(e) {
                                        nova.nextStep();
                                    });
                            },
                            page: "/lessons",
                            // pageMatcher: /\/lessons$/,
                        },
                        {
                            //screen can be clicked at this point, clicking preview is optional but highlighted. Continue button eds the quest
                            title: 'Preview/Wrap up',
                            body: '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',
                            highlightedElement: "#previewLesson",
                            elementCorner: "bottom-left",
                            tooltipCorner: "bottom-left",
                            backdrop: false,
                            page: "/lessons",
                            pageMatcher: /\/lessons$/,
                            continueButton: 'Mark Quest Completed',
                        }
                    ]

                }
            },
        };
    },
    methods: {
        novaDotClicked: function() {
            
            if (this.currentQuest) {
                return;
            }

            if (this.showLibrary) {
                this.novaReady = false;
                this.step = null;
                this.showLibrary = false;
                return;
            }            

            var qgroups = {};
            Object.keys(this.quests).forEach(function(key) {
                var group = nova.quests[key].level;
                if (!qgroups[group]) qgroups[group] = [];
                qgroups[group].push(key);
            })

            let body = '<div>';
            Object.keys(qgroups).forEach(function(key) {
                var quests = qgroups[key];
                body += '<h2 class="text-white">' + key + '</h2><uL>';
                for (var i = 0; i < quests.length; i++) {
                    body +=
                        '<li><a href="#" class="text-white text-underline" onclick="nova.startQuest(' +
                        quests[i] + ')">' + nova.quests[quests[i]].name + '</a>';
                    if (nova.finishedQuests.indexOf(quests[i]) !== -1) body +=
                        ' <img style="height: 1em" src="/assets/img/icon-checkmark.png" alt="checkmark">';
                    body += '</li>';
                }
                body += '</ul>';
            })
            body += '</div>';

            this.showLibrary = true;
            console.log(this.showLibrary);
            

            // this.novaReady = true;
            // this.step = {
            //     title: 'Available Quests',
            //     body: body,
            //     selectedElement: '#nova-launcher',
            // };

        },
        toggleSpin: function(){
            // get #nova-dot
            let novaDot = document.getElementById('nova-dot');
            // add class spin
            novaDot.classList.toggle('spin');
            //remove class spin
            setTimeout(() => {
                novaDot.classList.toggle('spin');
            }, 1000);
            
            
        },
        libraryOpen: function() {
            this.showLibrary = true;    
            //set body overflow hidden 
            this.populateLibrary();
            document.body.style.overflow = 'hidden';                            
            console.log('LIBRARY OPEN');
        },
        libraryClose: function() {
            this.showLibrary = false;   
            document.body.style.removeProperty('overflow');
            document.getElementById('nova-library').style.setProperty('z-index', '9999');
            console.log('LIBRARY CLOSED');
            setTimeout(()=>
                {                    
                    document.getElementById('nova-library').style.removeProperty('z-index'); },500
            );             
        },   
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
        initConfetti: function() {
            var el = document.getElementById('confetti')
            installConfetti(el);
        },
        reset: function() {
            fetch('/nova/reset', {
                method: 'post',
                keepalive: true
            }).then(function() {
                document.location = '/folders';
            });
        },
        startQuest: function(quest) {
            this.currentStep = null;
            this.libraryClose();
            this.currentQuest = quest;
            this.currentStep = 1;
            this.updateQuestStatus(this.currentQuest, this.currentStep);
            this.isNovaBlockVisible = true;            
        },
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
        nextStep: function() {
            
            localStorage.setItem('isVisible', this.isVisible);
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
        revertParentPosition: function(element) {
            var parent = element.parentElement;
            // console.log('Parent Array:', parent) 
            while (parent) {
                // console.log('Remove Parent Position:', parent)
                if (parent.classList.contains('position-fixed') || parent.classList.contains(
                        'position-sticky') || parent.classList.contains('fixed-top') || parent.classList
                    .contains('sticky-top') || Array.from(parent.classList).some(cls => cls.startsWith(
                        'z-'))) {
                    parent.style.removeProperty('position');
                    parent.style.removeProperty('z-index'); // Remove the z-index property
                }
                parent = parent.parentElement;

            }
        },
        setParentPosition: function(element) {
            var parent = element.parentElement;
            // console.log('Parent Array:', parent) 
            while (parent) {
                // console.log('Set Parent Position:', parent)
                if (parent.classList.contains('position-fixed') || parent.classList.contains(
                        'position-sticky') || parent.classList.contains('fixed-top') || parent.classList
                    .contains('sticky-top') || Array.from(parent.classList).some(cls => cls.startsWith(
                        'z-'))) {
                    parent.style.setProperty('position', 'relative', 'important');
                    parent.style.setProperty('z-index', 'auto',
                        'important'); // Set the z-index to auto with !important
                }
                parent = parent.parentElement;

            }
        },
        showCurrentStep: async function(delayOver) {
             // Fade out
            this.isVisible = false;
            await this.$nextTick();
            await new Promise(resolve => setTimeout(resolve, 500));

            // Remove previous highlighted element if any
            var previousElement = document.querySelector('.nova-selected');
            if (previousElement) {
                previousElement.classList.remove('nova-selected');
                previousElement.style.border = '';
                previousElement.style.position = '';
                previousElement.style.zIndex = '';
                this.revertParentPosition(previousElement);
                console.log('Revert Parent Position:', previousElement);
            }
              

            // Remove the 'during-nova' class from body and any other class that starts with 'nova_'
            document.body.classList.remove('during-nova');
            document.body.classList.forEach(function(cls) {
                if (cls.match(/nova_.*_.*/)) document.body.classList.remove(cls);
            });

            // Add a new class indicating the current quest and step
            document.body.classList.add('nova_' + this.currentQuest + '_' + this.currentStep);

            // Validate if current quest and step exist
            if (!this.currentQuest || !this.currentStep) {
                return;
            }

            // Get the current step object
            var step = this.quests[this.currentQuest].steps[this.currentStep - 1];
            if (!step) {
                this.backdropActive = false;
                this.hiddenBackground = false;
                this.step = null;
                this.novaReady = false;
                return;
            }

            // Check for page-specific mini-novas
            if (step.otherPageMiniNova && step.otherPageMiniNova.pageMatcher.test(window.location
                    .pathname)) {
                step = step.otherPageMiniNova;
            }
            // Redirect if step is on another page
            else if (step.page && !step.pageMatcher.test(window.location.pathname)) {
                document.location.href = step.page
                return;
            }
            // Don't run if on a page that doesn't match the step's pageMatcher
            else if (step.pageMatcher && !step.pageMatcher.test(window.location.pathname)) {
                return;
            }

            // Handle step delay
            if (step.delay && delayOver !== true) {
                setTimeout(function() {
                    nova.showCurrentStep(true);
                }, step.delay);
                return;
            }

            // Apply the 'during-nova' class to body
            document.body.classList.add('during-nova');                  

            // Update the backdrop and background properties
            this.backdropActive = step.hasOwnProperty('backdrop') ? step.backdrop : true;
            this.hiddenBackground = step.hasOwnProperty('hiddenBackground') ? step.hiddenBackground : false;

            // Update the step and set novaReady to false
            this.step = step;
            this.novaReady = false;



            // Process highlighted element if specified
            if (step.highlightedElement) {
                var show = function(e) {
                    var date = new Date();
                    var time = date.getTime();
                    var selectedElement = document.querySelector(step.highlightedElement);
                    if (selectedElement) {
                        selectedElement.classList.add('nova-selected');
                        nova.setParentPosition(selectedElement);
                        if (!selectedElement.classList.contains('modal')) {
                            selectedElement.style.position = 'relative';
                        }
                        selectedElement.style.setProperty('z-index', '1032', 'important');

                        console.log('Selected element: ' + selectedElement + time);
                    } else {

                        console.log("Couldn't find selectedElement: " + step.highlightedElement + time);
                    }



                    // Run any initialization function
                    if (step.initFunction) {
                        try {
                            step.initFunction(nova);
                        } catch (e) {
                            console.log('Error in initFunction', e);
                        }
                    }
                };

                if (document.readyState === 'loading') {
                    document.addEventListener('DOMContentLoaded', show);
                } else {
                    setTimeout(show, 20);
                }
            } else {

            }
            this.positionNova()
            
            // Fade in
            this.isVisible = true;

        },       
        loadAnimation: function() {

            if (this.step && !this.animationInitialized) { // Check if animation is already initialized
                let animation = lottie.loadAnimation({
                    container: document.getElementById('nova-dot'),
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    path: '/assets/lottie/nova-pulse.json'
                });
                console.log('LOTTIE INITIALIZED');
                this.animationInitialized = true; // Set the flag to true after initializing
            } else if (this.animationInitialized) {
                console.log('LOTTIE ALREADY INITIALIZED');
            }
            else {
                console.error('LOTTIE FAILED TO INITIALIZE');                
            }
                
        },
        positionNova: function() {

            this.$nextTick(function() {                
                this.novaReady = true;
                this.loadAnimation();   
                // var novadot = this.$refs.novaDot;
                // var novatext = this.$refs.novaText;
                // //get position of novatext
                // novatext.position = novatext.getBoundingClientRect();
                // //set position of novadot
                // console.log(novatext.position);

                // novadot.style.left = novatext.position.left + 'px';
                // novadot.style.top = novatext.position.top + 'px';
            })
        },
        animateTransition: function() {
        // Your complex JS logic for animation
        },
    },
    watch: {
        currentStep: function(newVal, oldVal) {
            if (oldVal == null) {
                if (this.currentStep > 0) {
                    var step = this.quests[this.currentQuest].steps[this.currentStep - 1];
                    if (step.preparationCallback) {
                        step.preparationCallback(this.showCurrentStep);
                    }
                    setTimeout(() => {
                        console.log('Watch/Current Step:', this.currentStep);
                        this.isNovaBlockVisible = true;
                    }, 1000); // 1000ms or 1 second delay
                }
            } else {
                this.showCurrentStep();
                setTimeout(() => {
                    console.log('Watch.else/Current Step:', this.currentStep);
                    this.isNovaBlockVisible = true;
                }, 1000); // 1000ms or 1 second delay
            }
        },
        currentQuest: function() {
            this.showCurrentStep();
        }
    },
    computed: {
        totalSteps() {
            return this.quests[this.currentQuest].steps.length;
        }
    },
    mounted: function() {           
        // this.populateLibrary();
        if (this.currentStep) {
            console.log('Mounted/Current Step:', this.currentStep);
            setTimeout(() => {
            this.isNovaBlockVisible = true;
            }, 1000); // 1000ms or 1 second delay
        }
    },
    created() {       
        this.isVisible = localStorage.getItem('isVisible') === 'true';
    },
    beforeDestroy: function() {
        // window.removeEventListener('resize', this.handleResize);
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
