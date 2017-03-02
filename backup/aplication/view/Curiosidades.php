<?php

class Curiosidades {

    private $_msgbox;

    public function __construct($msg='') {
        $this->_msgbox = $msg;
    }

    public function listCuriosidades() {
        $sql = 'SELECT * FROM curiosidades ORDER BY id ASC LIMIT 2';
        $query = new Consulta($sql);
        while ($row = $query->VerRegistro()) {
            ?>
            <div class="post-38 post-top  archive" id="post-38">
                <div class="preview_image_cur">
                    <div class="preview_data_cur">
                        <p class="archive_title_cur">
                            <a title="<?php echo $row['titulo'] ?>">
                                <?php echo $row['titulo'] ?>
                            </a>
                        </p>
                    </div>
                    <a>
                        <img width="233" height="133" src="aplication/webroot/imgs/fotos/<?php echo $row['imagen'] ?>" class="attachment-post-thumbnail wp-post-image" alt="<?php echo $row['titulo'] ?>" title="<?php echo $row['titulo'] ?>">
                    </a>
                </div>
                <div class="preview_text_prin">
                    <?php echo $row['descripcion'] ?>
                </div>
            </div>                
            <?php
        }
    }
}