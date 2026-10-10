<?php
DB::table('notifications')->update(['description' => DB::raw("REPLACE(description, 'KGDS SARASWATI VIDYA MANDIR', 'SARASWATI SHISHU MANDIR')")]);
DB::table('notifications')->update(['title' => DB::raw("REPLACE(title, 'KGDS SARASWATI VIDYA MANDIR', 'SARASWATI SHISHU MANDIR')")]);
echo "Updated!";
