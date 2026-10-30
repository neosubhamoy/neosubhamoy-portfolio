<script>
    window.siteDataset = <?php echo json_encode([
        "email" => fetch_quick_action_link("Send Email"),
        "chat" => fetch_quick_action_link("Chat Online"),
        "sources" => fetch_quick_action_link("Source Code"),
    ]); ?>;
</script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script type="text/javascript" src="/assets/js/preloader-config.js"></script>
<script type="text/javascript" src="/assets/js/navmenu-config.js"></script>
<script type="text/javascript" src="/assets/js/floatingbar-config.js"></script>
<script type="text/javascript" src="/assets/js/keybinding-config.js"></script>
<script type="text/javascript" src="/assets/js/tippy-config.js"></script>
<script type="text/javascript" src="/assets/js/aos-config.js"></script>