<?php 
/* Template Name: Places * Template Post Type: post*/ /*The template for displaying full width single posts. */
get_header(); 

?>
<div class='container'>

    <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/12/LH-logo-landscape-1.png" alt="Logo">
    <div class="form">
        <h1>Select Your Store</h1>
        <form action="form.php">
            <select id="cars" name="cars">
                <option value="otahuhu">Otahuhu</option>
                <option value="mount">Mount Maunganui</option>
                <option value="rotorua">Rotorua</option>
                <option value="tokoroa">Tokoroa</option>
                <option value="kawerau">Kawerau</option>
            </select>
            <button type='submit'>Go</button>
        </form>
        
     
    </div>
</div>
<?php
get_footer(); 
?>