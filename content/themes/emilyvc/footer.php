<?php if(!is_page(4)): ?>
    <footer class="footer footer--home">
<?php else: ?>
    <footer class="footer">
<?php endif; ?>

    <div class="container">
        <div class="footer__container">
            <div class="footer__links">
                <ul>
                    <li class="icon icon--medium icon--dribbble"></li>
                    <li class="icon icon--medium icon--twitter"></li>
                    <li class="icon icon--medium icon--git"></li>
                </ul>
            </div>
            <div class="footer__email">
                <a hresf="mailto:hello@emily.vc">hello@emily.vc</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
    