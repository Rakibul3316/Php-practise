<?php

define( 'DB_NAME', 'D:\\PHP-Practise\\8.CRUD-Project\\data\\db.txt' );

function seed() {
    $data = [
        [
            'id'    => 1,
            'fname' => 'Rakib',
            'lname' => 'Sarker',
            'roll'  => 16,
        ],
        [
            'id'    => 2,
            'fname' => 'Ragib',
            'lname' => 'Pial',
            'roll'  => 27,
        ],
        [
            'id'    => 3,
            'fname' => 'Arifin',
            'lname' => 'Abir',
            'roll'  => 22,
        ],
        [
            'id'    => 4,
            'fname' => 'Safin',
            'lname' => 'Junaid',
            'roll'  => 05,
        ],
        [
            'id'    => 5,
            'fname' => 'Shawon',
            'lname' => 'Ahmed',
            'roll'  => 12,
        ],
    ];
    $serialized_data = serialize( $data );
    file_put_contents( DB_NAME, $serialized_data, LOCK_EX );
};

function generate_report() {
    $serialized_data = file_get_contents( DB_NAME );
    $students        = unserialize( $serialized_data );
    ?>
<table>
    <tr>
        <th>Name</th>
        <th>Roll</th>
        <th width="25%">Action</th>
    </tr>
    <?php foreach ( $students as $student ) {?>
    <tr>
        <td>
            <?PHP printf( '%s %s', $student['fname'], $student['lname'] );?>
        </td>
        <td>
            <?PHP printf( '%s', $student['roll'] );?>
        </td>
        <td>
            <?PHP printf( '<a href="/index.php?task=edit&id=%s">Edit</a> | <a class="delete" href="/index.php?task=delete&id=%s">Delete</a>', $student['id'], $student['id'] );?>
        </td>
    </tr>
    <?php }?>
</table>
<?php
}

function add_student( $fname, $lname, $roll ) {
    $found           = false;
    $serialized_data = file_get_contents( DB_NAME );
    $students        = unserialize( $serialized_data );
    foreach ( $students as $_student ) {
        if ( $_student['roll'] == $roll ) {
            $found = true;
            break;
        }
    }

    if ( !$found ) {
        $new_id  = new_id( $students );
        $student = [
            'id'    => $new_id,
            'fname' => $fname,
            'lname' => $lname,
            'roll'  => $roll,
        ];
        array_push( $students, $student );
        $serialized_data = serialize( $students );
        file_put_contents( DB_NAME, $serialized_data, LOCK_EX );
        return true;
    }
    return false;
}

function new_id( $students ) {
    $max_id = max( array_column( $students, 'id' ) );
    return $max_id + 1;
}

function get_student( $id ) {
    $serialized_data = file_get_contents( DB_NAME );
    $students        = unserialize( $serialized_data );
    foreach ( $students as $student ) {
        if ( $student['id'] == $id ) {
            return $student;
        }
    }
}

function update_student( $id, $fname, $lname, $roll ) {
    $found           = false;
    $serialized_data = file_get_contents( DB_NAME );
    $students        = unserialize( $serialized_data );
    foreach ( $students as $_student ) {
        if ( $_student['roll'] == $roll && $_student['id'] != $id ) {
            $found = true;
            break;
        }
    }

    if ( !$found ) {
        $students[$id - 1]['fname'] = $fname;
        $students[$id - 1]['lname'] = $lname;
        $students[$id - 1]['roll']  = $roll;
        $serialized_data            = serialize( $students );
        file_put_contents( DB_NAME, $serialized_data, LOCK_EX );
        return true;
    }
    return false;
}

function delete_student( $id ) {
    $serialized_data = file_get_contents( DB_NAME );
    $students        = unserialize( $serialized_data );
    foreach ( $students as $offset => $student ) {
        if ( $student['id'] == $id ) {
            unset( $students[$offset] );
        }
    }

    $serialized_data = serialize( $students );
    file_put_contents( DB_NAME, $serialized_data, LOCK_EX );
}
