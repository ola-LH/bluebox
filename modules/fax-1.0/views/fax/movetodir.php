<?php defined('SYSPATH') or die('No direct access allowed.'); ?>
        <div class="field">
        <?php
            echo form::label(array(
                    'for' => 'faxProfile[registry][destination_dir]',
                    'hint' => 'Destination directory for fax.',
                    'help' => 'Directory that the received fax will be moved into in a tiff format.'
                ),
				'Destination Directory:'
            );
            echo form::input('faxProfile[registry][destination_dir]');
        ?>
        </div>

