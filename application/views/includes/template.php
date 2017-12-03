<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
        <title><?php echo $title; ?></title>
        <meta name="description" content="Discover and book amazing travel experiences with zoom">
        <meta name="keywords" content="Asia Tours, Cheap tickets, things to do, Universal Studios Singapore, Hong Kong Disneyland, Cruise Ship, Cruise Ship Layover, Cruise Ship Jakarta">
        <meta name="author" content="zoom Travel"/>
        <meta name="baidu-site-verification" content="Ty9XLxZolV"/>
        <meta http-equiv="content-language" content="id">
        <meta property="og:title" content=""/>
        <meta property="og:description" content=""/>
        <meta property="og:image" content=""/>
        <?php $this->load->view($style); ?>
    </head>
    <body>
        <?php $this->load->view('includes/header');
        $this->load->view($content);
        $this->load->view('includes/footer');
        $this->load->view($js); ?>
    </body>
</html>