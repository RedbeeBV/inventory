Filestore
=========

Flat file key value store


Example
=======

	$db = new \Filestore\Filestore('./db');

	# Create filestore if it does not exist. Otherwise load it.
	$users = $db->load('user');

	$test = $db->load('test');
	$test->set('key1', value);
    
        # Retrieve number of entries 
	echo $test->count();

	# Insert entries
	$users->set('bob', ['fg', 'rrfgrerg', 'agaere']);
	$users->set('ztg', ['fg', 'rrfgrerg', 'agaere']);
	$users->set('admin', ['fg', 'rrfgrerg', 'agaere']);

	# Iterate entries
	foreach($test->keys() as $key) {
		print_r($users->get($key));
	}

	# Delete an entry
	$users->delete('ztg');

	# Retrieve number of entries 
	echo $users->count();
