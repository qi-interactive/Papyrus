<br /><br /><br/>


<a href="" class="btn btn-success"><spanc class="octicon octicon-octoface"></span> Get plugin</a>



<?php 

foreach ($dir as $fileinfo): 
	if ($fileinfo->isDot() || $fileinfo->isDir())
		continue;
	?>

	<h1><?= str_replace(".php", "", $fileinfo->getFilename()) ?></h1>

	<code>
		<?= htmlspecialchars(file_get_contents($fileinfo->getPath() . DIRECTORY_SEPARATOR . $fileinfo->getFilename())); ?>
	</code>

<?php endforeach; ?>

