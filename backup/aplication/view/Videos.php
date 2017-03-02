<?php

class Videos {

    private $_msgbox;

    public function __construct($msg='') {
        $this->_msgbox = $msg;
    }

    public function listVideos() {
        $sql = 'SELECT * FROM videos ORDER BY id ASC LIMIT 2';
        $query = new Consulta($sql);
            while ($row = $query->VerRegistro()) {
                ?>
                    <div class="post-38 post-top  archive" id="post-38">

                        <div class="preview_image_cur">

                            <div class="preview_data_cur">
                                <p class="archive_title_cur">
                                    <a href="video.php?id=<?php echo $row['id']?>" rel="#over-video" title="<?php echo $row['titulo'] ?>">
                                        <?php echo $row['titulo'] ?>
                                    </a>
                                </p>
                            </div>

                            <a href="video.php?id=<?php echo $row['id']?>" rel="#over-video">
                                <img width="233" height="133" src="http://img.youtube.com/vi/<?php echo $row['v_id'] ?>/0.jpg" class="attachment-post-thumbnail wp-post-image" alt="<?php echo $row['titulo'] ?>" title="<?php echo $row['titulo'] ?>">
                            </a>

                        </div>

                        <div class="preview_text_prin">

                            <?php echo $row['descripcion'] ?>

                        </div>

                    </div>
                <?php
            }    
    }
    
    public function listVideosId($id) {
        $sql = 'SELECT * FROM videos WHERE id = '.$id;
        $query = new Consulta($sql);
        while ($row = $query->VerRegistro()) {        
        ?>
        <div style="height: 315px;width: 560px;">
            <iframe width="560" height="315" src="http://www.youtube.com/embed/<?php echo $row['v_id']?>" frameborder="0" allowfullscreen></iframe>
        </div>    
        <?php
        }
    }    
    
}