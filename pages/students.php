<div class="card mb-4">
    <div class="card-header pb-0">
        <h6>Authors table</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
            <div class="container">
            <table id="studentdata" class="table align-items-center mb-0">
                <thead>
                   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">First Name</th>
                   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Last Name</th>
                   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Birth</th>
                   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Grade</th>
                   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gender</th>
                   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Address</th>
                   <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                </thead>
                <tbody>
                    <?php
                        include "koneksi.php";
                        $query = mysqli_query($koneksi, "select * from students");
                        $no = 1;
                        while($data = mysqli_fetch_array($query)){
                            echo "<tr>";
                            echo "<td>$no</td>",
                                 "<td>$data[first_name]</td>",
                                 "<td>$data[last_name]</td>",
                                 "<td>$data[birth]</td>",
                                 "<td>$data[grade]</td>",
                                 "<td>$data[phone]</td>",
                                 "<td>$data[gender]</td>",
                                 "<td>$data[address]</td>",
                                 "<td>";
                                    ?>
                                    <button class="badge bg-primary">Details</button>
                                    <button class="badge bg-warning">Edit</button>
                                    <button class="badge bg-danger">Delete</button>
                                    <?php
                            echo "</td>";
                            echo "</tr>";

                            $no++;
                        }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
