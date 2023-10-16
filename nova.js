window.quests = {
    1: {
        level: 'Beginner',
        name: 'Getting Started',
        steps: [{
                title: 'Hey there!',
                body: '<p>Welcome to THiNKTech! I\'m Nova, your fabulous teaching sidekick. In just a few minutes, I\'ll have you seamlessly running lesson plans with our awesome tool and turning your classes into collaborative learning centers.</p>',
                page: "/folders",
                pageMatcher: /\/folders$/,
                continueButton: 'Let\'s Go',
  
            },
            { 
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
                        document.getElementById('opening').click();                        // setTimeout(nextStep, 500);
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
  
                        cleanUpIframe(iframe, dom);
                        removeBackdrop(dom);
                        updateSelectField(dom, iframe);
  
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
  };
