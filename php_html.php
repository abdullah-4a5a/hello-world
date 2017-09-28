<html>
<head>
</head>
<body>
<?php
$hobbies = [
  'Hacking',
  'Drinking',
  'Streaking',
  'Doing nothing',
  'Sleeping',
  'LARPing',
  'Stalking',
];
?>
<?php foreach ($hobbies as $key => $value): ?>
  <ul>
    <li><?php echo $hobbies[$key]; ?></li>
  </ul>
<?php endforeach; ?>
</body>
</html>
