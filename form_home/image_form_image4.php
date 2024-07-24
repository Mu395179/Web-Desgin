<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Admin Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../api/upload.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="class" value="image4" >
                    <div class="mb-3">
                        <input class="form-control" type="file" name="file">
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">上傳</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script>
        const imageModal = new bootstrap.Modal('#imageModal')
        const modal = document.querySelector("#imageModal")
        modal.addEventListener('hidden.bs.modal', event => {

            imageModal.dispose()
            $("#modal").html("")

        })
       
        //console.log(imageModal)
        imageModal.show()
    </script>
</body>

</html>