
<style>
    .container {
  max-width: 1200px;
  margin: auto;
  margin-top:20px;
  padding: 20px;
}

section {
  margin-bottom: 40px;
   margin-top: 50px;
}

.card-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  align-items: stretch;
}

.card {
  width: calc(50% - 20px);
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  transition: transform 0.2s ease-in-out;
}

.card:hover {
  transform: translateY(-5px);
}

.card img {
  width: 100%;
  height: 300px;
  object-fit: cover;
  object-position: center;
}

.card h3 {
  font-size: 20px;
  font-weight: 700;
  margin: 20px;
}

.card p {
  font-size: 16px;
  line-height: 1.5;
  margin: 0 20px 20px;
}


</style>
<?php include('header.php');?>

<?php include('navbar.php');?>
<div class="container">
  <section>
    <h2>Top Hospitals In pune</h2>
    <!-- <p>Section description goes here.</p> -->
  </section>
  <div class="card-container">
    <div class="card">
      <img src="images/Gallery/large.jpg" alt="Card Image 1">
      <h3>Apollo Hospital</h3>
      <p>Multispeciality Hospital</p>
    </div>
    <div class="card">
      <img src="images/Gallery/image1.jpg" alt="Card Image 2">
      <h3>Manipal Hospitals</h3>
      <p>Super Speciality hspital</p>
    </div>
  </div>
  <div class="card-container">
    <div class="card">
      <img src="images/Gallery/image2.jpg" alt="Card Image 1">
      <h3>Sahyadri Hospitals </h3>
      <p>Super Speciality hspital</p>
   <!--   <a href="https://sahyadrihospital.com/"> <button style="width:80px;" name="view" class="btn-primary text-left">View</button></a> -->
    </div>
    <div class="card">
      <img src="images/Gallery/image7.jpg"  alt="Card Image 2">
      <h3>Aditya Birla Memorial Hospital</h3>
      <p>Super Speciality Hospital</p>
    </div>
  </div>
</div>
<?php include('footer.php');?>