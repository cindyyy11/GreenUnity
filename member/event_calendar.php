<?php

    class Calendar {
        private $active_year, $active_month, $active_day;
        private $events = [];

        public function __construct($date = null) {
            $this->active_year = $date != null ? date('Y', strtotime($date)) : date('Y');
            $this->active_month = $date != null ? date('m', strtotime($date)) : date('m');
            $this->active_day = $date != null ? date('d', strtotime($date)) : date('d');
        }

        public function add_event($txt, $date, $days = 1, $color = '') {
            $color = $color ? ' ' . $color : $color;
            $this->events[] = [$txt, $date, $days, $color];
        }

        public function __toString() {
            $num_days = date('t', strtotime($this->active_day . '-' . $this->active_month . '-' . $this->active_year));
            $num_days_last_month = date('j', strtotime('last day of previous month', strtotime($this->active_day . '-' . $this->active_month . '-' . $this->active_year)));
            $days = [0 => 'Sun', 1 => 'Mon', 2 => 'Tue', 3 => 'Wed', 4 => 'Thu', 5 => 'Fri', 6 => 'Sat'];
            $first_day_of_week = array_search(date('D', strtotime($this->active_year . '-' . $this->active_month . '-1')), $days);
            $html = '<div class="calendar">';
            $html .= '<div class="header">';
            $html .= '<div class="month-year">';
            $html .= date('F Y', strtotime($this->active_year . '-' . $this->active_month . '-' . $this->active_day));
            $html .= '</div>';
            $html .= '</div>';
            $html .= '<div class="days">';
            foreach ($days as $day) {
                $html .= '
                    <div class="day_name">
                        ' . $day . '
                    </div>
                ';
            }
            for ($i = $first_day_of_week; $i > 0; $i--) {
                $html .= '
                    <div class="day_num ignore">
                        ' . ($num_days_last_month-$i+1) . '
                    </div>
                ';
            }
            for ($i = 1; $i <= $num_days; $i++) {
                $selected = '';
                if ($i == $this->active_day) {
                    $selected = ' selected';
                }
                $html .= '<div class="day_num' . $selected . '">';
                $html .= '<span>' . $i . '</span>';
                foreach ($this->events as $event) {
                    for ($d = 0; $d <= ($event[2]-1); $d++) {
                        if (date('y-m-d', strtotime($this->active_year . '-' . $this->active_month . '-' . $i . ' -' . $d . ' day')) == date('y-m-d', strtotime($event[1]))) {
                            $html .= '<div class="event' . $event[3] . '">';
                            $html .= $event[0];
                            $html .= '</div>';
                        }
                    }
                }
                $html .= '</div>';
            }
            for ($i = 1; $i <= (42-$num_days-max($first_day_of_week, 0)); $i++) {
                $html .= '
                    <div class="day_num ignore">
                        ' . $i . '
                    </div>
                ';
            }
            $html .= '</div>';
            $html .= '</div>';
            $html .= '<div class="legend"><p><b>Legend</b></p>';
            
            // Legend items representing different event categories
            $legendItems = [
                ['Joined Workshop', '#598268'],
                ['Available Workshop', '#9ac6aa'],
                ['Joined Event', '#5c5c5c'],
                ['Available Event', '#c7c2b6']
                // Add more legend items as needed
            ];

            foreach ($legendItems as $legendItem) {
                $html .= '<div class="legend-item" style="background-color: ' . $legendItem[1] . '; text-align: center; color: white; ">' . $legendItem[0] . '</div><br><br>';
            }
            $html .= '</div>';
            $html .= '</div>';
            $html .= '</div>';

            return $html;
        }

    }

    include 'db_conn.php';
    $event_result = mysqli_query($conn, "SELECT * FROM events WHERE Title LIKE '%Event%'");
    $events = array();
    while ($row = mysqli_fetch_assoc($event_result)) {
        $events[] = $row;
    }
    $joined_events = mysqli_query($conn, "SELECT EventID FROM `join` WHERE MemberID = $_SESSION[member_id]");
    $j_events = array();
    while ($row = mysqli_fetch_assoc($joined_events)) {
        $j_events[] = $row;;
    }
    $workshops_result = mysqli_query($conn, "SELECT * FROM events WHERE Title LIKE '%Workshop%'");
    $workshops = array();
    while ($row = mysqli_fetch_assoc($workshops_result)) {
        $workshops[] = $row;
    }
    $joined_workshops = mysqli_query($conn, "SELECT EventID FROM `join` WHERE MemberID = $_SESSION[member_id]");
    $j_workshops = array();
    while ($row = mysqli_fetch_assoc($joined_workshops)) {
        $j_workshops[] = $row;
    }
    $calendar = new Calendar();
    foreach ($events as $event) {
        foreach ($j_events as $j_event) {
            if ($event['EventID'] == $j_event['EventID']) {
                $calendar->add_event($event['Title'], $event['Start_Date'], $event['Duration'], 'ejoined');
                break;
            }
        }
        if ($event['EventID'] != $j_event['EventID']){
            $calendar->add_event($event['Title'], $event['Start_Date'], $event['Duration'], 'eavailable');
        } 
    } 

    foreach ($workshops as $workshop) {
        foreach ($j_workshops as $j_workshop) {
            if ($workshop['EventID'] == $j_workshop['EventID']) {
                $calendar->add_event($workshop['Title'], $workshop['Start_Date'], $workshop['Duration'], 'wjoined');
                break;
            }
        }
        if ($workshop['EventID'] != $j_workshop['EventID']) {
            $calendar->add_event($workshop['Title'], $workshop['Start_Date'], $workshop['Duration'], 'wavailable');
        }
    }
    echo $calendar;
?>