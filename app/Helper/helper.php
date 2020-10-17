<?php

/**
 * @param $image_name
 * @return string to concat
 */
function imagePath($image_name = null)
{
    return asset('storage/images/' . $image_name);
}

/**
 * @param $file_name
 * @return string to concat
 */
function filePath($file_name = null)
{
    return asset('storage/files/' . $file_name);
}
/*
*  Used to convert date for database
*  @param
*  $date as date
*  @return date
*/

function toDate($date)
{
    if (!$date) {
        return;
    }

    return date('Y-m-d', strtotime($date));
}


/*
*  Used to get date in desired format
*  @return date format
*/

function getDateFormat()
{
    if (settings('date_format') === 'DD-MM-YYYY') {
        return 'd-m-Y';
    } elseif (settings('date_format') === 'MM-DD-YYYY') {
        return 'm-d-Y';
    } elseif (settings('date_format') === 'DD-MMM-YYYY') {
        return 'd-M-Y';
    } elseif (settings('date_format') === 'MMM-DD-YYYY') {
        return 'M-d-Y';
    } else {
        return 'd-m-Y';
    }
}

/*
*  Used to convert date in desired format
*  @param
*  $date as date
*  @return date
*/

function showDate($date)
{
    if (!$date) {
        return;
    }

    $date_format = getDateFormat();
    return date($date_format, strtotime($date));
}

/*
*  Used to convert time in desired format
*  @param
*  $datetime as datetime
*  @return datetime
*/

function showDateTime($time = '')
{
    if (!$time) {
        return;
    }

    $date_format = getDateFormat();
    if (settings('time_format') === 'H:mm') {
        return date($date_format . ',H:i', strtotime($time));
    } else {
        return date($date_format . ',h:i a', strtotime($time));
    }
}

/*
*  Used to convert time in desired format
*  @param
*  $time as time
*  @return time
*/

function showTime($time = '')
{
    if (!$time) {
        return;
    }

    if (settings('time_format') === 'H:mm') {
        return date('H:i', strtotime($time));
    } else {
        return date('h:i a', strtotime($time));
    }
}

/*
*  Used to convert date &time in desired format
*  @param
*  $time as time
*  @return time
*/

function showDiffForHuman($time = '')
{
    if (!$time) {
        return;
    }
    return \Illuminate\Support\Carbon::parse($time)->diffForHumans();
}
