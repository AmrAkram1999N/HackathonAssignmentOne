<!-- Click on Modal Button -->
<a class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#modalForm3">
    N4:Controllers and Models
</a>

<!-- Modal -->
<div class="modal fade" id="modalForm3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark">
                <h3 class="modal-title text-white" id="exampleModalLabel">The details of the project</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h5>Project control system:</h5>
                <hr style="height:3px;border:none;color:rgb(2, 2, 2);background-color:rgb(0, 0, 0);" />

                <p>
                    The CardController is designed with the aim of managing the internal operations of queuing
                    organization. The controller consists of four functions.
                </p>
                <h5>Basic functions are as follows:</h5>
                <ol>
                    <li><span style="color: red;">GetNumber function:</span> It is responsible for giving the customer a
                        reservation number on the queue in order of precedence.</li>
                    <li><span style="color: red;">getClient function:</span> It is responsible for calling clients to
                        perform their services in order of precedence.</li>
                </ol>
                <h5>Secondary functions are as follows:</h5>

                <ol>
                    <li><span style="color: red;">functions previousNumber and nextNumber:</span> through which the
                        customer can see the length of the queue that he will be waiting for.</li>
                    <li><span style="color: red;">remainingTime function: The expected time for the client's role is
                            determined.</span></li>
                </ol>

                <p>This is linked to the control module of the Card, which forms the link with the database.</p>

                <a target="_blank" href="{{route('controllerModelSystem')}}">Click on this link to view the concept map of
                    the controllers.
                </a>

            </div>
        </div>
    </div>
</div>
