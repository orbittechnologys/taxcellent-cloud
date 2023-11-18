<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="Nadeem Ahmed" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style1 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style1 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style2 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style3 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style3 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style4 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style4 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style5 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style5 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style8 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style8 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style9 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style9 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style10 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style10 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style11 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style11 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style12 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style12 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style13 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style13 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style14 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style14 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style15 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:26pt; background-color:white }
      th.style15 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:26pt; background-color:white }
      td.style16 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style16 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style17 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style17 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style18 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style18 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style19 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style19 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style20 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style20 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style21 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style21 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style22 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FF0000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style22 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#FF0000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style23 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style23 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style24 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style24 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style25 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style25 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style26 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style26 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style27 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style27 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style28 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style28 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style29 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style29 { vertical-align:bottom; border-bottom:2px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style30 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style30 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style31 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style31 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style33 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style34 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style34 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style35 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style35 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style36 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style36 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style37 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style37 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style38 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style38 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style39 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style39 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style40 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style40 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style41 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style41 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style42 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style42 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style43 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style43 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style44 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style44 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style45 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style45 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style46 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style46 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style47 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style47 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style48 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style48 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style49 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style49 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style50 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style50 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style51 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style51 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style52 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style52 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style53 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:#FFFF00 }
      th.style53 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:#FFFF00 }
      td.style54 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:#FFFF00 }
      th.style54 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:#FFFF00 }
      td.style55 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style55 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style56 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Roboto Condensed', sans-serif; font-size:14pt; background-color:#165383 }
      th.style56 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Roboto Condensed', sans-serif; font-size:14pt; background-color:#165383 }
      td.style57 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Roboto Condensed', sans-serif; font-size:14pt; background-color:#165383 }
      th.style57 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#FFFFFF; font-family:'Roboto Condensed', sans-serif; font-size:14pt; background-color:#165383 }
      td.style58 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style58 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style59 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style59 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style60 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style60 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style61 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style61 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style62 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style62 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style63 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style63 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style64 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style64 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style65 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style65 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      td.style66 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      th.style66 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt; background-color:white }
      table.sheet0 col.col0 { width:10.84444432pt }
      table.sheet0 col.col1 { width:42.69999951pt }
      table.sheet0 col.col2 { width:20.3333331pt }
      table.sheet0 col.col3 { width:181.64444236pt }
      table.sheet0 col.col4 { width:374.13332904pt }
      table.sheet0 col.col5 { width:73.87777693pt }
      table.sheet0 col.col6 { width:64.38888815pt }
      table.sheet0 col.col7 { width:59.64444376pt }
      table.sheet0 col.col8 { width:99.63333219pt }
      table.sheet0 col.col9 { width:43.37777728pt }
      table.sheet0 col.col10 { width:43.37777728pt }
      table.sheet0 .column10 { visibility:collapse; display:none }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row1 { height:30pt }
      table.sheet0 tr.row6 { height:15.75pt }
      table.sheet0 tr.row10 { height:33.6pt }
      table.sheet0 tr.row11 { height:33.75pt }
      table.sheet0 tr.row12 { height:33.75pt }
      table.sheet0 tr.row15 { height:225pt }
      table.sheet0 tr.row18 { height:29.1pt }
      table.sheet0 tr.row19 { height:29.1pt }
      table.sheet0 tr.row20 { height:29.1pt }
      table.sheet0 tr.row21 { height:15pt }
      table.sheet0 tr.row26 { height:174.6pt }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.01in; margin-right: 0.1in; margin-top: 0.2in; margin-bottom: 0.01in; }
body { margin-left: 0.01in; margin-right: 0.1in; margin-top: 0.2in; margin-bottom: 0.01in; }
</style>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <tbody>
          <tr class="row0">
            <td class="column0">&nbsp;</td>
            <td class="column1">&nbsp;</td>
            <td class="column2">&nbsp;</td>
            <td class="column3">&nbsp;</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row1">
            <td class="column0">&nbsp;</td>
            <td class="column1 style22 s"><a class="comment-indicator"></a><div class="comment">Administrator:<br />
Please insert the Taxcellent logo</div>
Taxcellent logo</td>
            <td class="column2 style23 null"></td>
            <td class="column3 style19 s">TAXCELLENT INFRA PRIVATE LIMITED</td>
            <td class="column4 style23 null"></td>
            <td class="column5 style23 null"></td>
            <td class="column6 style24 s">Contact No : 8431736664</td>
            <td class="column7 style23 null"></td>
            <td class="column8 style25 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row2">
            <td class="column0">&nbsp;</td>
            <td class="column1 style26 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style6 s">Registered Address : 923, 2nd Floor, 12th Cross, BTM 4th Stage, 2nd Block Bengaluru, Karnataka 560076</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6 style6 s">Email ID  : admin@taxcellentglobal.com</td>
            <td class="column7">&nbsp;</td>
            <td class="column8 style27 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row3">
            <td class="column0">&nbsp;</td>
            <td class="column1 style26 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style6 s">CIN: U67100KA2021PTC150805</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8 style27 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row4">
            <td class="column0">&nbsp;</td>
            <td class="column1 style26 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style6 s">PAN: AAICT8005B</td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8 style27 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row5">
            <td class="column0">&nbsp;</td>
            <td class="column1 style26 null"></td>
            <td class="column2">&nbsp;</td>
            <td class="column3 style6 s">GSTIN: </td>
            <td class="column4">&nbsp;</td>
            <td class="column5">&nbsp;</td>
            <td class="column6">&nbsp;</td>
            <td class="column7">&nbsp;</td>
            <td class="column8 style27 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row6">
            <td class="column0">&nbsp;</td>
            <td class="column1 style28 null"></td>
            <td class="column2 style11 null"></td>
            <td class="column3 style11 null"></td>
            <td class="column4 style12 null"></td>
            <td class="column5 style11 null"></td>
            <td class="column6 style13 null"></td>
            <td class="column7 style13 null"></td>
            <td class="column8 style29 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row7">
            <td class="column0">&nbsp;</td>
            <td class="column1 style56 s style57" colspan="8" rowspan="2">&nbsp;INVOICE</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row8">
            <td class="column0">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row9">
            <td class="column0">&nbsp;</td>
            <td class="column1 style14 s">BILL TO</td>
            <td class="column2 style9 null"></td>
            <td class="column3 style9 null"></td>
            <td class="column4 style9 null"></td>
            <td class="column5 style58 s style60" colspan="4">INVOICE DETAILS</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row10">
            <td class="column0">&nbsp;</td>
            <td class="column1 style44 s style52" colspan="4" rowspan="3"><a class="comment-indicator"></a><div class="comment">Administrator:<br />
Autopopulate along with Edit option</div>
Name of the Billing Entity<br />
Address of the billing entity<br />
<span style="color:#FF0000; font-family:'Roboto Condensed', sans-serif; font-size:11pt">PAN (optional)</span><span style="color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt"><br />
Contact No<br />
Email ID<br />
</span><span style="color:#FF0000; font-family:'Roboto Condensed', sans-serif; font-size:11pt">GSTIN (optional)</span><span style="color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt"><br />
</span></td>
            <td class="column5 style55 s style55" colspan="2">Invoice number</td>
            <td class="column7 style43 null style43" colspan="2"></td>
            <td class="column9 style15 null"></td>
            <td class="column10 style15 null"></td>
          </tr>
          <tr class="row11">
            <td class="column0">&nbsp;</td>
            <td class="column5 style55 s style55" colspan="2">Invoice date </td>
            <td class="column7 style43 null style43" colspan="2"></td>
            <td class="column9 style15 null"></td>
            <td class="column10 style15 null"></td>
          </tr>
          <tr class="row12">
            <td class="column0">&nbsp;</td>
            <td class="column5 style55 s style55" colspan="2"><a class="comment-indicator"></a><div class="comment">Administrator:<br />
Autopopulate the "State" from billing address</div>
Place of Supply</td>
            <td class="column7 style43 null style43" colspan="2"></td>
            <td class="column9 style15 null"></td>
            <td class="column10 style15 null"></td>
          </tr>
          <tr class="row13">
            <td class="column0">&nbsp;</td>
            <td class="column1 style64 s style64" rowspan="2">Sr No:</td>
            <td class="column2 style64 s style64" rowspan="2">SAC</td>
            <td class="column3 style64 s style64" rowspan="2">Service category</td>
            <td class="column4 style65 s style66" rowspan="2">Description of Services </td>
            <td class="column5 style64 s style64" rowspan="2">Amount (INR)</td>
            <td class="column6 style64 s style64" rowspan="2">Discount (INR)</td>
            <td class="column7 style64 s style64" rowspan="2">Amount (INR)</td>
            <td class="column8 style53 s style54" rowspan="2">Total (INR)</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row14">
            <td class="column0">&nbsp;</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row15">
            <td class="column0">&nbsp;</td>
            <td class="column1 style7 n">1</td>
            <td class="column2 style4 null"></td>
            <td class="column3 style2 s"><span style="font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt">Private Limited Company registration <br />
</span><span style="color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt"><br />
</span></td>
            <td class="column4 style2 s">1. DSC (Digital Signature Certificate) (2 nos.)<br />
2. DIN (Director Identification Number) allotment (2 nos.)<br />
3. PAN application<br />
4. TAN registration<br />
5. GST registration<br />
6. EPFO Registration<br />
7. ESIC Registration<br />
8. Professional tax registration<br />
9. #Opening bank account<br />
10. Name reservation and approval <br />
11. Includes Government Fee &amp; Stamp duty for Authorized Capital up to Rs. 15 Lakh<br />
12. Drafting of MOA and AOA<br />
13. Business Incorporation certificate<br />
14. Issue of Share certificate (4 nos.)<br />
15. Regular updates on the service status</td>
            <td class="column5 style16 n">&nbsp;&nbsp;10,000.00 </td>
            <td class="column6 style16 n">&nbsp;&nbsp;200.00 </td>
            <td class="column7 style16 f">&nbsp;&nbsp;9,800.00 </td>
            <td class="column8 style16 f">&nbsp;&nbsp;9,800.00 </td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row16">
            <td class="column0">&nbsp;</td>
            <td class="column1 style7 n">2</td>
            <td class="column2 style4 null"></td>
            <td class="column3 style2 s">Accounting Services</td>
            <td class="column4 style5 s">Book keeping services</td>
            <td class="column5 style17 n">&nbsp;&nbsp;2,000 </td>
            <td class="column6 style18 n">200.00</td>
            <td class="column7 style17 n">&nbsp;&nbsp;1,800 </td>
            <td class="column8 style17 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row17">
            <td class="column0">&nbsp;</td>
            <td class="column1 style32 s style34" colspan="7">Sub total</td>
            <td class="column8 style17 f">&nbsp;&nbsp;9,800 </td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row18">
            <td class="column0">&nbsp;</td>
            <td class="column1 style40 s style42" colspan="7"><a class="comment-indicator"></a><div class="comment">Administrator:<br />
If the "Place of Supply" is Karantake then CGST and SGST should populate. In other cases, it should be IGST<br />
</div>
CGST @ 9%</td>
            <td class="column8 style17 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row19">
            <td class="column0">&nbsp;</td>
            <td class="column1 style40 s style42" colspan="7">SGST @ 9%</td>
            <td class="column8 style17 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row20">
            <td class="column0">&nbsp;</td>
            <td class="column1 style40 s style42" colspan="7">IGST @ 18%</td>
            <td class="column8 style17 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row21">
            <td class="column0">&nbsp;</td>
            <td class="column1 style32 s style34" colspan="7">Total amount paid inclusive of GST tax </td>
            <td class="column8 style21 f">&nbsp;&nbsp;9,800 </td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row22">
            <td class="column0">&nbsp;</td>
            <td class="column1 style61 s style63" colspan="8">Invoice total in words - </td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row23">
            <td class="column0">&nbsp;</td>
            <td class="column1 style30 null"></td>
            <td class="column2 style3 null"></td>
            <td class="column3 style3 null"></td>
            <td class="column4 style3 null"></td>
            <td class="column5 style3 null"></td>
            <td class="column6 style3 null"></td>
            <td class="column7 style3 null"></td>
            <td class="column8 style31 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row24">
            <td class="column0">&nbsp;</td>
            <td class="column1 style20 s">Debited from Bank </td>
            <td class="column2 style4 null"></td>
            <td class="column3 style4 null"></td>
            <td class="column4 style40 null style42" colspan="5"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row25">
            <td class="column0">&nbsp;</td>
            <td class="column1 style20 s">Transaction ID</td>
            <td class="column2 style4 null"></td>
            <td class="column3 style4 null"></td>
            <td class="column4 style40 null style42" colspan="5"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row26">
            <td class="column0">&nbsp;</td>
            <td class="column1 style38 s style38" colspan="4"><span style="font-weight:bold; color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt">Payment has been made to:<br />
</span><span style="color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt">A/C Name             : <br />
Account no           : <br />
CRN                       : <br />
</span><span style="color:#FF0000; font-family:'Roboto Condensed', sans-serif; font-size:11pt">Account Type       : INR<br />
</span><span style="color:#000000; font-family:'Roboto Condensed', sans-serif; font-size:11pt">Branch Code         : <br />
IFSC Code              : <br />
Branch Name       : <br />
Branch Address   : <br />
Bank Swift Code  : </span></td>
            <td class="column5 style39 s style39" colspan="4">For TAXCELLENT INFRA PRIVATE LIMITED<br />
<br />
<br />
<br />
<br />
Authorised Signatory: <br />
Place:<br />
Date:</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row27">
            <td class="column0">&nbsp;</td>
            <td class="column1 style35 s style37" colspan="8">This is a digitally signed invoice and does not require manual signature</td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row28">
            <td class="column0">&nbsp;</td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row29">
            <td class="column0">&nbsp;</td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row30">
            <td class="column0">&nbsp;</td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row31">
            <td class="column0">&nbsp;</td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row32">
            <td class="column0">&nbsp;</td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
          <tr class="row33">
            <td class="column0">&nbsp;</td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9">&nbsp;</td>
            <td class="column10">&nbsp;</td>
          </tr>
        </tbody>
    </table>
  </body>
</html>
