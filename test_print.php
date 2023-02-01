<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        hello world
    </div>
    <div>
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magnam amet nobis iure? Ea a natus assumenda recusandae necessitatibus. Fugiat ex harum soluta quod corrupti ullam quae perspiciatis provident enim hic.
    </div>
    <div class="mt-4 mb-4" align="center">
        <button class="btn btn-secondary ms-4" id="printBtn">In trang này</button>
    </div>
    <script type="text/javascript">
        const printContent = document.getElementById('printBtn');
        printContent.addEventListener('click', function(){
            print();
        });
    </script>


<!-- expand: using d-print-none class with bootstrap to disable an element from printing -->
<div class="d-print-none">
    <?php include("footer.php"); ?>
</div>
</body>
</html>