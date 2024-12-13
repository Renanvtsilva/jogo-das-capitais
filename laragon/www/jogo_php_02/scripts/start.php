<?php

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6">

            <div class="card p-5">
                <div class="row">
                    <div class="col text-center">
                        <h3>Jogo das Capitais</h3>
                        <hr>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-4">
                        <form action="index.php?route=start" method="post">
                            <div class="mb-3">
                                <label for="text_total_questions" class="form-label">Número de quetões:</label>
                                <input type="number" name="text_total_questions" class="form-control form-control-lg text-center"  min="3" max="20" value="10">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success w-100">Iniciar</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>