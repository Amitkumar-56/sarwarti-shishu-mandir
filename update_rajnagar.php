<?php
DB::table('notifications')->update(['description' => DB::raw("REPLACE(description, 'RAJNAGAR ', '')")]);
DB::table('notifications')->update(['title' => DB::raw("REPLACE(title, 'RAJNAGAR ', '')")]);
echo "Updated!";
