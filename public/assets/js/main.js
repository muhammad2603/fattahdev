/*
 * Function multipleStringWithDelete
 * @param {class} typeItInit: TypeIt Initialization
 * @param {array} stringsArray: Data string
 * @param {int} delayType: Delay execution after typing | 3000
 * @param {int} delayDelete: Delay execution after delete | 2000
 */
function multipleStringWithDelete(typeItInit, stringsArray = [], delayType = 3000, delayDelete = 2000) {
    // Get TypeIt initialization
    let chain = typeItInit;
    // Loop array with string and index
    stringsArray.forEach((str, idx) => {
        /* 
         * Declare chaining type on TypeIt with delay manipulation
         * @info:
         * - Set delay for type with argument delayType if current string index is not last
         * - if string index is last, set to 1000ms delay
         */
        chain = chain.type(str, { delay: idx !== (stringsArray.length - 1) ? delayType : 1000 })
        /* 
         * Declare chaining delete on TypeIt with delay manipulation
         * @info:
         * - Add chaining delete to TypeIt Init if string index is not last
         */
        if (idx !== (stringsArray.length - 1)) chain = chain.delete(null, { delay: delayDelete })
    })
    // When looping strings complete, return chain on above
    return chain;
}

/*
 * Function scrollToTargetSection
 * @param {string} getTargetIdWithDataAttr: Get string data-navigate-to from element navigation
 */
function scrollToTargetSection(getTargetIdWithDataAttr) {
    // Calculate offset for scrolling to element target (section navigate)
    const setOffsetY = (getTargetIdWithDataAttr === 'about') ? 96 : 20;
    // Set y transform 0%
    gsap.set('.details', { y: '0%' })
    // Scroll window to target section with offsetY and duration scrolling is 1 second
    gsap.to(window, { scrollTo: { y: `#${getTargetIdWithDataAttr}`, offsetY: setOffsetY }, duration: 1 })
}

// Document Event Listener {DOMContentLoaded}: If DOM HTML is full loaded, then:
document.addEventListener('DOMContentLoaded', () => {

    gsap.registerPlugin(ScrollTrigger);
    gsap.registerPlugin(ScrollToPlugin);

    // window.history.scrollRestoration = 'manual';

    // window.addEventListener('load', () => {
    //     // gsap.set('.landing-page', { y: '0%', opacity: 1 })
    //     // gsap.set('.details', { y: '-10%', opacity: 0 })
    //     // setTimeout(() => {
    //     //     ScrollTrigger.refresh()
    //     //     window.scrollTo(0, 0)
    //     // }, 500)

    //     gsap.set('.landing-page, .details', { opacity: 0 })

    //     gsap.to(window, {
    //         duration: 1.2,
    //         scrollTo: 0,
    //         ease: 'power2.out',
    //         onComplete: () => {
    //             gsap.to('.landing-page', { opacity: 1, y: '0%', duration: 0.8, ease: "power1.out" })
    //             gsap.to('.details', { opacity: 0, y: '-10%', duration: 0.8, ease: "power1.out" })
    //             ScrollTrigger.refresh()
    //         }
    //     })

    // })

    window.addEventListener('resize', () => ScrollTrigger.refresh())

    // Get element pointer with ID
    const pointerElement = document.getElementById('pointerMovement');
    // Get all Elements Button Navigates with selector
    let buttonNavigates = document.querySelectorAll('div[data-navigate-to]');
    // Window Event Listener {mousemove}: When cursor on window is moving, then:
    window.addEventListener('mousemove', (e) => {
        // Get current position of moving cursor on horizontal (X-Axis)
        const clientX = e.clientX + 1;
        // Get current position of moving cursor on vertical (Y-Axis)
        const clientY = e.clientY + 1;
        // Set background to radial gradient with current position cursor for gradient position
        pointerElement.style.background = `radial-gradient(600px at ${clientX}px ${clientY}px, rgba(0, 132, 209, 0.15), transparent 60%)`;
    })
    // Declare TypeIt Init
    new TypeIt('#myName', {
        // Set start delay before typing
        startDelay: 1800,
        // Set speed typing
        speed: 130
    }).go() // Execute typing
    // Get list tools on element with ID tools from his attribute data-typed
    const toolsListTyped = document.getElementById('tools').getAttribute('data-typed').split(',');
    // Call multipleStringWithDelete function
    multipleStringWithDelete(new TypeIt('#tools', {
        // Set start delay before typing
        startDelay: 1000,
        // Set speed typing
        speed: 150,
        // Execute process while typing is complete
        afterComplete: (instance) => {
            // Destroy typing and remove cursor blink
            instance.destroy()
        }
    }), toolsListTyped, 2000)
        .go() // Execute typing
    // Animate figure with ID myPhoto
    gsap.from('#myPhoto', {
        opacity: 0.2,
        scale: 0.15,
        duration: 2,
        ease: 'bounce.out'
    })
    // Init Timeline
    let tl = gsap.timeline();
    // Start Timeline with element ID developerText, delay start 0.5s from start animation
    tl.from('#developerText', { x: -118, duration: 1 }, '+=0.5')
    // Animate element with class landing-page and set trigger to scroll
    gsap.to('.landing-page', {
        scrollTrigger: {
            trigger: '.landing-page',
            start: 'top top',
            endTrigger: '.details',
            end: 'top 20%',
            scrub: true,
        },
        y: '-10%',
        opacity: 0,
        ease: 'none',
    })
    // Init Timeline
    tl = gsap.timeline({
        scrollTrigger: {
            trigger: '.details',
            start: 'top-=70 center',
            toggleActions: 'restart none none reverse',
        },
        // Animate element with ID links while scroll trigger on element with class details while completed
        onComplete: () => gsap.to(document.getElementById('links'), { x: '0%', opacity: 1, duration: .85 })
    });
    // Then, start animate to navigation with timeline scroll trigger on element with class details
    tl.from('.action-about', { x: '-165%', duration: .75, ease: 'power1.out' })
        .from('.action-experiences', { x: '-165%', duration: .75, ease: 'power1.out' }, '-=0.3')
        .from('.action-projects', { x: '-165%', duration: .75, ease: 'power1.out' }, '-=0.3')
    // Animate element with class details
    gsap.to('.details', {
        scrollTrigger: {
            trigger: '.details',
            start: 'top bottom',
            end: '+=240',
            scrub: true
        },
        // While animation complete, refresh ScrollTrigger, this will change or refresh new position of details element
        onComplete: () => ScrollTrigger.refresh(),
        y: '0%',
        opacity: 1,
        ease: 'none',
    })
    // Animate element with class about-me-details
    gsap.to('.about-me-details', {
        scrollTrigger: {
            trigger: '.about-me-details',
            start: 'top center',
            end: 'bottom+=105 center',
            onEnterBack: () => {
                buttonNavigates.forEach(item => item.classList.remove('active'))
                document.querySelector('div[data-navigate-to=about]').classList.add('active')
            },
            onLeave: () => {
                buttonNavigates.forEach(item => item.classList.remove('active'))
                document.querySelector('div[data-navigate-to=experiences]').classList.add('active')
            }
        }
    })
    // Animate element with class my-experiences-details
    gsap.to('.my-experiences-details .card', {
        scrollTrigger: {
            trigger: '.my-experiences-details',
            start: 'top center',
            end: 'bottom+=105 center',
            onEnterBack: () => {
                buttonNavigates.forEach(item => item.classList.remove('active'))
                document.querySelector('div[data-navigate-to=experiences]').classList.add('active')
            },
            onLeave: () => {
                buttonNavigates.forEach(item => item.classList.remove('active'))
                document.querySelector('div[data-navigate-to=projects]').classList.add('active')
            }
        },
        onComplete: () => {
            document.querySelectorAll('.my-experiences-details .card').forEach(item => {
                item.classList.add('pointer-events-auto')
                item.classList.add('active')
            })
        },
        x: 0, opacity: 1, duration: 1, ease: 'power1.out', stagger: 0.5
    })
    // Animate element with class my-projects-details
    gsap.to('.my-projects-details .card', {
        scrollTrigger: {
            trigger: '.my-projects-details',
            start: 'top 50%'
        },
        onComplete: () => {
            document.querySelectorAll('.my-projects-details .card').forEach(item => {
                item.classList.add('pointer-events-auto')
                item.classList.add('active')
            })
        },
        x: 0, opacity: 1, duration: 1, ease: 'power1.out', stagger: 0.5
    })
    // Select all element a on parent with ID navHomePage
    const navHomePage = document.querySelectorAll('#navHomePage > a');
    // Loop elements a on variable navHomePage
    navHomePage.forEach(item => {
        // Add event listener click on item (element a)
        item.addEventListener('click', function (e) {
            // Remove default action
            e.preventDefault()
            // Get data-navigate-to on element a
            const getTargetIdWithDataAttr = this.getAttribute('data-navigate-to');
            // Execute function scrollToTargetSection for navigate to section target
            scrollToTargetSection(getTargetIdWithDataAttr)
        })
    })
    // Looping items on variable buttonNavigates
    buttonNavigates.forEach(item => {
        // Add event listener to item
        item.addEventListener('click', function () {
            // Loop buttonNavigates back, then remove class active to item
            buttonNavigates.forEach(item => item.classList.remove('active'))
            // Add class active to item clicked
            this.classList.add('active')
            // Get data-navigate-to on element item
            const getTargetIdWithDataAttr = this.getAttribute('data-navigate-to');
            // Execute function scrollToTargetSection for navigate to section target
            scrollToTargetSection(getTargetIdWithDataAttr)
        })
    })

})