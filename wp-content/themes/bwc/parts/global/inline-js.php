<?php /* Enable linking directly to the 'show enquiry' form on the contact page */ ?>
<?php if (isset($_GET['requestdemo']) && get_the_ID() == PAGE_ID_CONTACT): ?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('.btn-show-enquiry').click();
        });
    </script>
<?php endif; ?>