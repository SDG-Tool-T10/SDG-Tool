@extends('common.master')

@section('content')
    <section class="hero  is-medium  is-bold">
        <div class="header-img">
            <img src="./image/sdg-header-en.png" />
        </div>
    </section>

    <section class="section">
        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Education</label>
            </div>
            <div class="field-body">
                <div class="field ">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select>
                                <option>None</option>
                                <option>ICT</option>
                                <option>Civil Engineering</option>
                                <option>Social Work</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Type of Activity</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select>
                                <option>None</option>
                                <option>Class</option>
                                <option>Minor</option>
                                <option>Graduation Research</option>
                                <option>Research Project</option>
                                <option>Event</option>
                                <option>Policy</option>
                                <option>Business Operations</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Research</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select>
                                <option>None</option>
                                <option>Business development</option>
                                <option>Marketing</option>
                                <option>Sales</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Sustainable Development Goal</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select>
                                <option>None</option>
                                <option>No poverty</option>
                                <option>Zero hunger</option>
                                <option>Good health and well-being</option>
                                <option>Quality education</option>
                                <option>Gender equality</option>
                                <option>Clean water and sanitation</option>
                                <option>Affordable and clean energy</option>
                                <option>Decent work and economic growth</option>
                                <option>Industry, Innovation and Infrastructure</option>
                                <option>Reduced inequalities</option>
                                <option>Sustainable cities and communities</option>
                                <option>Responsible consumption and production</option>
                                <option>Climate action</option>
                                <option>Life below water</option>
                                <option>Life on land</option>
                                <option>Peace, Justice and strong institutions</option>
                                <option>Partnerships for the goals</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Policy</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select>
                                <option>None</option>
                                <option>Campus Services</option>
                                <option>Finance</option>
                                <option>ICT</option>
                                <option>Marketing, Communication and Internationalisation</option>
                                <option>Education, Research and Quality</option>
                                <option>PO&O</option>
                                <option>Student Services</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Subgoal</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <input class="input" type="text" placeholder="type the subgoal">
                    </div>
                    <p class="help">
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Discribe activity briefly</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <textarea class="textarea" placeholder="Explain your contribution"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Discribe impact</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <textarea class="textarea" placeholder="Explain you impact"></textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label is-normal">
                <label class="label">Contact</label>
            </div>
            <div class="field-body">
                <div class="field">
                    <p class="control is-expanded has-icons-left">
                        <input class="input" type="text" placeholder="Name">
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </p>
                </div>
                <div class="field">
                    <p class="control is-expanded has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="Email">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                            <i class="fas fa-check"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>

        <div class="field is-horizontal">
            <div class="field-label">
                <!-- Left empty for spacing -->
            </div>
            <div class="field-body">
                <div class="field">
                    <div class="control">
                        <button class="button is-info">
                            Send message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
