//--- controls tooltips and popover elements

tippy('#searchbar', {
  content: "ALT + K",
  theme: 'neosubhamoy',
  animation: 'shift-away',
  delay: 500,
  touch: false
});

tippy('#sharebutton', {
  content: "ALT + L",
  theme: 'neosubhamoy',
  animation: 'shift-away',
  delay: 500,
  touch: false
});

tippy('#closebutton', {
  content: "ESC",
  placement: 'right',
  theme: 'neosubhamoy',
  animation: 'shift-away',
  delay: 500,
  touch: false
});

tippy('#shareclosebutton', {
  content: "ESC",
  placement: 'right',
  theme: 'neosubhamoy',
  animation: 'shift-away',
  delay: 500,
  touch: false
});

tippy('.projectitem', {
  content(reference) {
    const projectId = reference.getAttribute('data-template');
    const projectTippyTemplate = document.getElementById(projectId);
    return projectTippyTemplate.innerHTML;
  },
  allowHTML: true,
  placement: 'right',
  theme: 'neosubhamoy',
  animation: 'scale-subtle',
  touch: false
});

