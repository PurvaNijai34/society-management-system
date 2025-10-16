const heading = document.getElementById('typewriter-heading');

function resetAnimation() {
    heading.style.animation = 'none';  // Reset the animation
    heading.offsetHeight;              // Trigger a reflow
    heading.style.animation = null;    // Restart the animation
}

setInterval(resetAnimation, 4000); // 6000ms (or adjust for the desired delay between animations)
