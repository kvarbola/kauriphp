<?php
/*
Plugin Name: Marguse teateriba
Description: Kuvab lehe ülaservas teateriba
Version: 1.0
Author: Margus
*/

// Lisa admin menüü
add_action('admin_menu', function() {
    add_menu_page(
        'Marguse teateriba',
        'Marguse teateriba',
        'manage_options',
        'marguse-teateriba',
        'teateriba_settings_page'
    );
});

// Registreeri seaded
add_action('admin_init', function() {
    register_setting('teateriba_settings_group', 'teateriba_text');
    register_setting('teateriba_settings_group', 'teateriba_bg_color');
    register_setting('teateriba_settings_group', 'teateriba_text_color');
});

// Seadete leht
function teateriba_settings_page() {
    ?>
    <div class="wrap">
        <h1>Marguse teateriba</h1>
        <form method="post" action="options.php">
            <?php settings_fields('teateriba_settings_group'); ?>
            <?php do_settings_sections('teateriba_settings_group'); ?>

            <table class="form-table">
                <tr>
                    <th>Tekst</th>
                    <td>
                        <input type="text" name="teateriba_text" value="<?php echo esc_attr(get_option('teateriba_text')); ?>" style="width: 300px;">
                    </td>
                </tr>

                <tr>
                    <th>Taustavärv</th>
                    <td>
                        <input type="color" name="teateriba_bg_color" value="<?php echo esc_attr(get_option('teateriba_bg_color', '#000000')); ?>">
                    </td>
                </tr>

                <tr>
                    <th>Teksti värv</th>
                    <td>
                        <input type="color" name="teateriba_text_color" value="<?php echo esc_attr(get_option('teateriba_text_color', '#ffffff')); ?>">
                    </td>
                </tr>
            </table>

            <?php submit_button(); ?>
        </form>
    </div>
    <?php
}

// Kuva teateriba frontendis
add_action('wp_head', function() {
    $text = get_option('teateriba_text');
    $bg = get_option('teateriba_bg_color', '#000000');
    $color = get_option('teateriba_text_color', '#ffffff');

    if (!$text) return;

    echo "<style>
        .teateriba {
            width: 100%;
            background: {$bg};
            color: {$color};
            text-align: center;
            padding: 10px;
            font-size: 16px;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
        }
        body {
            margin-top: 40px;
        }
    </style>";
});

// Lisa HTML body algusesse
add_action('wp_body_open', function() {
    $text = get_option('teateriba_text');

    if (!$text) return;

    echo '<div class="teateriba">' . esc_html($text) . '</div>';
});