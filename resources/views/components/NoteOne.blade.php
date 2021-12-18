<!-- Click on Modal Button -->
<a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#modalForm1">
    N2:DB System
 </a>

 <!-- Modal -->
 <div class="modal fade" id="modalForm1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                 <h3 class="modal-title " id="exampleModalLabel">The details of the project</h3>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <h5>Database System:</h5>
                 <hr style="height:3px;border:none;color:rgb(2, 2, 2);background-color:rgb(0, 0, 0);" />

                 <p>The database system is very simple, as only one table is needed to manage an organized queue system.
                    The name of the table in the system is "cards" and it contains three four columns, which I list as follows:
                </p>
                <hr style="height:3px;border:none;color:rgb(158, 1, 1);background-color:rgb(167, 4, 4);" />

                <ol>
                    <li>Column "id" as the primary key of the table and as a tool that can be used to organize the queue.</li>
                    <li>The column "clientnumber" as a foreign key in the table and also as a tool for organizing the queue.</li>
                    <li>Column "clientname" in order to put a name as needed.</li>
                    <li>column "user_id" to create a relationship with the "users" table.</li>
                </ol>
                <hr style="height:3px;border:none;color:rgb(158, 1, 1);background-color:rgb(167, 4, 4);" />
                <p>
                    In addition to the previous table, there is the users table that is used with the fortify security system to represent a bank employee or an administration for any local institution.
                </p>
                <a target="_blank" href="{{ route('databaseSystem') }}">Click here to see a concept map of the database.
                </a>
             </div>
         </div>
     </div>
 </div>
