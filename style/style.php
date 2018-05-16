header("content-type: text/css");
@font-face {
  font-family: 'Raleway';
  src: url("../fonts/Raleway-Regular.ttf"); }
@font-face {
  font-family: 'Raleway-semibold';
  src: url("../fonts/Raleway-SemiBold.ttf"); }
@font-face {
  font-family: 'Raleway-bold';
  src: url("../fonts/Raleway-Bold.ttf"); }
@keyframes fadeIn {
  100% {
    opacity: 1; } }
@keyframes flipInX {
  from {
    -webkit-transform: perspective(400px) rotateY(90deg);
    transform: perspective(400px) rotateY(90deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in;
    opacity: 0; }
  40% {
    -webkit-transform: perspective(400px) rotateY(-20deg);
    transform: perspective(400px) rotateY(-20deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in; }
  60% {
    -webkit-transform: perspective(400px) rotateY(10deg);
    transform: perspective(400px) rotateY(10deg);
    opacity: 1; }
  80% {
    -webkit-transform: perspective(400px) rotateY(-5deg);
    transform: perspective(400px) rotateY(5deg); }
  to {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
    opacity: 1; } }
@keyframes popDown {
  0% {
    transform: translateY(-100px); } }
@keyframes slideUp {
  0% {
    transform: translateY(300px); }
  100% {
    opacity: 1;
    transform: translateY(0); } }
@keyframes slideDown {
  0% {
    transform: translateY(-300px); }
  100% {
    opacity: 1;
    transform: translateY(0); } }
@keyframes slideInLeft {
  0% {
    opacity: 0;
    transform: translateX(-300px); }
  100% {
    opacity: 1;
    transform: translateX(0); } }
@keyframes slideInRight {
  0% {
    opacity: 0;
    transform: translateX(300px); }
  100% {
    opacity: 1;
    transform: translateX(0); } }
@keyframes toBottomFromTop {
  49% {
    transform: translateY(100%); }
  50% {
    opacity: 0;
    transform: translateY(-100%); }
  51% {
    opacity: 1; } }
@keyframes popIn {
  0% {
    transform: scale(0); }
  60% {
    opacity: 1;
    transform: scale(1.05); }
  80% {
    transform: scale(0.95); }
  100% {
    transform: scale(1);
    opacity: 1; } }
a {
  text-decoration: none;
  color: inherit; }

body {
  color: #fff;
  font-family: 'Raleway';
  text-align: center;
  margin: 0px;
  font-size: 8pt;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  overflow-x: hidden; }

#preload {
  display: none; }

.disable-hover {
  pointer-events: none; }

.overflow-wrap {
  overflow-x: hidden; }

.canvas {
  position: absolute;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100%;
  background: url("../img/filler.png") center center/cover; }

.button {
  padding: 10px 20px;
  border: 2px solid #fff;
  box-sizing: inherit;
  display: inline-block;
  font-size: 13pt;
  transition: all .5s;
  cursor: pointer; }
  .button:hover {
    background-color: #04C2C9;
    border-color: #04C2C9; }
  .button .mdi {
    vertical-align: middle; }

.bold {
  font-family: 'Raleway-bold'; }

.flex {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center; }
  .flex.row {
    flex-direction: row; }
  .flex.wrap {
    flex-wrap: wrap; }

.hex-wrap {
  text-align: center;
  position: relative;
  display: inline-block;
  width: 80px;
  height: 80px; }

.hexagon {
  background-color: #04C2C9;
  height: 100%;
  width: calc(100% * 0.57735);
  display: inline-block; }

.hexagon:before {
  position: absolute;
  top: 0;
  right: calc((100% / 2) - ((100% * 0.57735) / 2));
  background-color: inherit;
  height: inherit;
  width: inherit;
  content: '';
  transform: rotateZ(60deg); }

.hexagon:after {
  position: absolute;
  top: 0;
  right: calc((100% / 2) - ((100% * 0.57735) / 2));
  background-color: inherit;
  height: inherit;
  width: inherit;
  content: '';
  transform: rotateZ(-60deg); }

.highlight {
  color: #E31B6D; }

.header {
  font-size: 25pt;
  font-family: 'raleway-bold';
  position: relative;
  color: #444649;
  position: relative; }

.header-bar {
  margin: 25px 0 75px 0;
  width: 70px;
  height: 4px;
  background: #444649; }

.label {
  font-size: 14pt;
  font-weight: 500; }

.resume {
  background: #455261;
  height: 100px; }

nav {
  bottom: 0;
  left: 0;
  position: absolute;
  height: 50px;
  width: 100%;
  background: #1B242F;
  border-bottom: 3px solid #04C2C9;
  text-align: left;
  z-index: 99; }
  nav.fixed {
    top: 0;
    bottom: inherit;
    left: 0;
    position: fixed; }
    nav.fixed.desk {
      animation: popDown .5s; }
  nav .link-wrap {
    max-width: 1200px;
    width: 100%;
    position: absolute;
    top: 53px;
    background: #333;
    overflow: hidden;
    height: 0;
    transition: height .3s ease-out; }
    nav .link-wrap.visible {
      height: 220px; }
    nav .link-wrap div {
      padding: 12px 20px;
      font-size: 12pt;
      cursor: pointer;
      transition: color .5s;
      text-transform: uppercase; }
      nav .link-wrap div:first-child {
        padding: 25px 20px 12px 20px; }
      nav .link-wrap div:hover {
        color: #E31B6D; }
  nav .mdi-menu {
    position: absolute;
    right: 5vw;
    margin: auto 0;
    font-size: 30pt;
    line-height: 36pt;
    top: 0; }
  nav .active {
    color: #E31B6D; }

.carousel-wrap {
  position: relative;
  height: 250px;
  margin: 0 auto; }

.window {
  overflow: hidden;
  position: relative;
  background: #222; }

#carousel {
  width: 10000px;
  position: relative;
  top: 0; }

.slide {
  height: 250px;
  cursor: pointer;
  float: left;
  display: flex;
  flex-direction: column;
  justify-content: center; }

.mdi-chevron-left, .mdi-chevron-right {
  cursor: pointer;
  position: absolute;
  bottom: 0;
  background: rgba(0, 0, 0, 0.3);
  padding: 10px 15px;
  cursor: pointer;
  font-size: 14pt !important;
  font-weight: bold;
  color: #fff; }

.mdi-chevron-left {
  left: 0; }

.mdi-chevron-right {
  right: 0; }

.transition {
  transition: .7s; }

.modal-wrap {
  height: 100vh;
  width: 100vw;
  position: fixed;
  pointer-events: none;
  z-index: 100; }
  .modal-wrap .mask {
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity .3s; }
  .modal-wrap .modal {
    background: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    position: relative;
    transition: all .3s;
    transform: scale(0.8);
    opacity: 0;
    align-items: flex-start;
    text-align: left;
    box-sizing: border-box;
    color: #333;
    height: 100vh; }
  .modal-wrap .close {
    bottom: 25px;
    right: 10px;
    color: #bbb;
    font-size: 20pt;
    position: absolute;
    font-weight: 800;
    cursor: pointer; }
  .modal-wrap .info-box {
    border-top: 3px solid #1B242F;
    padding: 15px 10px 85px 10px;
    box-sizing: border-box;
    color: #444; }
  .modal-wrap .title {
    font-size: 16pt;
    line-height: 20pt;
    font-family: 'Raleway-bold'; }
  .modal-wrap .tag {
    display: block;
    font-weight: 300;
    color: #c0c0c0;
    font-family: 'Raleway-bold';
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    padding-bottom: 15px;
    font-size: 8pt; }
  .modal-wrap .detail {
    font-size: 9pt;
    line-height: 14pt;
    margin-top: 13px; }
  .modal-wrap .mdi-open-in-new {
    position: relative;
    left: -10px;
    font-size: 11pt; }
  .modal-wrap .button {
    padding: 11px 30px;
    font-size: 10pt;
    transition: all .5s;
    cursor: pointer;
    background: #E31B6D;
    color: #fff;
    font-weight: 600;
    border: 0;
    pointer-events: none;
    visibility: hidden;
    position: absolute;
    bottom: 20px;
    left: 10px; }
    .modal-wrap .button.visible {
      pointer-events: initial;
      visibility: visible; }
    .modal-wrap .button:hover {
      color: #E31B6D;
      background: #fff; }
  .modal-wrap .carousel {
    box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.25); }
  .modal-wrap.visible {
    pointer-events: initial; }
    .modal-wrap.visible .modal {
      transform: scale(1);
      opacity: 1; }
    .modal-wrap.visible .mask {
      opacity: 1; }

section {
  padding: 70px 0 70px 0;
  color: #616161;
  line-height: 11pt;
  position: relative; }
  section .container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 10px;
    width: 100%;
    box-sizing: border-box; }
  section:nth-of-type(1) {
    padding: 0 10px;
    color: #fff;
    height: calc(100vh + 53px); }
    section:nth-of-type(1) .highlight {
      font-family: 'Raleway-semibold'; }
    section:nth-of-type(1) .text {
      margin: 0 0 20px 0;
      font-size: 16pt;
      line-height: 20pt;
      z-index: 1;
      pointer-events: none; }
    section:nth-of-type(1) .hexagon {
      transition: transform .9s ease-in-out; }
      section:nth-of-type(1) .hexagon:hover {
        transform: rotate(540deg); }
    section:nth-of-type(1) .button {
      padding: 12px 40px 12px 15px;
      position: relative;
      margin-bottom: 53px; }
      section:nth-of-type(1) .button .mdi {
        transition: transform .3s;
        position: absolute;
        right: 15px;
        top: 11px; }
      section:nth-of-type(1) .button:hover .mdi {
        transform: rotate(90deg); }
  section:nth-of-type(2) .label-wrap .label {
    margin: 20px 0 10px 0; }
  section:nth-of-type(2) .bullet-wrap {
    justify-content: flex-start;
    padding: 0 7px;
    height: 200px; }
  section:nth-of-type(2) .highlight {
    color: #009ADA; }
  section:nth-of-type(2) .up-arrow {
    margin: 15px 0;
    height: 30px; }
  section:nth-of-type(2) .skills-wrapper {
    align-items: flex-start;
    width: 100%; }
    section:nth-of-type(2) .skills-wrapper .me {
      height: 200px; }
    section:nth-of-type(2) .skills-wrapper .label {
      margin: 20px 0 15px 0; }
  section:nth-of-type(2) .hexagon i {
    position: absolute;
    top: 20px;
    font-size: 34pt;
    color: #fff;
    left: 0;
    right: 0;
    z-index: 1; }
  section:nth-of-type(2) .bars-wrap {
    margin: 50px auto 0 auto;
    width: calc(100% - 15px);
    max-width: 90%; }
    section:nth-of-type(2) .bars-wrap:not(.animated) .fill {
      width: 0 !important; }
  section:nth-of-type(2) .bar {
    color: #666;
    height: 22px;
    position: relative;
    background-color: #eee;
    margin: 0 0 12px 0;
    align-items: flex-end;
    font-size: 7pt; }
    section:nth-of-type(2) .bar:nth-child(1) .fill {
      transition: 1.1s 0.2s width ease-in-out; }
    section:nth-of-type(2) .bar:nth-child(2) .fill {
      transition: 1.2s 0.2s width ease-in-out; }
    section:nth-of-type(2) .bar:nth-child(3) .fill {
      transition: 1.3s 0.2s width ease-in-out; }
    section:nth-of-type(2) .bar:nth-child(4) .fill {
      transition: 1.4s 0.2s width ease-in-out; }
    section:nth-of-type(2) .bar:nth-child(5) .fill {
      transition: 1.5s 0.2s width ease-in-out; }
    section:nth-of-type(2) .bar:nth-child(6) .fill {
      transition: 1.6s 0.2s width ease-in-out; }
    section:nth-of-type(2) .bar:nth-child(7) .fill {
      transition: 1.7s 0.2s width ease-in-out; }
    section:nth-of-type(2) .bar:nth-child(8) .fill {
      transition: 1.8s 0.2s width ease-in-out; }
    section:nth-of-type(2) .bar:nth-child(9) .fill {
      transition: 1.9s 0.2s width ease-in-out; }
    section:nth-of-type(2) .bar:nth-child(10) .fill {
      transition: 2s 0.2s width ease-in-out; }
    section:nth-of-type(2) .bar span {
      display: none; }
    section:nth-of-type(2) .bar.fill {
      top: 0;
      left: 0;
      position: absolute;
      background-color: #00A1A7;
      padding: 0;
      opacity: 1; }
    section:nth-of-type(2) .bar .tag {
      top: 0;
      left: 0;
      position: absolute;
      background-color: #04C2C9;
      color: #fff;
      height: 100%;
      width: 110px;
      width: 70px; }
    section:nth-of-type(2) .bar.secondary {
      background-color: #C51675; }
      section:nth-of-type(2) .bar.secondary .tag {
        background-color: #E31B6D; }
    section:nth-of-type(2) .bar span {
      z-index: 1;
      padding: 0 15px 0 0; }
  section:nth-of-type(3) {
    background: #f5f5f5; }
    section:nth-of-type(3) .container {
      padding: 0; }
    section:nth-of-type(3) .filter-wrap {
      position: relative; }
    section:nth-of-type(3) .filter {
      font-size: 6pt;
      font-weight: 600;
      padding: 0 20px;
      cursor: pointer;
      transition: background-color .5s; }
    section:nth-of-type(3) .float-bar {
      top: 0;
      bottom: 0;
      left: 30px;
      position: absolute;
      margin: auto 0;
      position: absolute;
      overflow: hidden;
      height: 25px;
      border-radius: 1px;
      background: #E31B6D;
      transition: all .5s ease-in-out; }
      section:nth-of-type(3) .float-bar .row {
        top: 0;
        bottom: 0;
        left: -30px;
        position: absolute;
        margin: auto 0;
        transition: left .5s ease-in-out; }
        section:nth-of-type(3) .float-bar .row .filter {
          color: #fff; }
    section:nth-of-type(3) .text {
      top: 0;
      left: 0;
      position: absolute;
      width: 100%; }
    section:nth-of-type(3) #gallery {
      margin: 20px 0; }
      section:nth-of-type(3) #gallery .text, section:nth-of-type(3) #gallery .button {
        z-index: 2;
        text-align: center;
        opacity: 0;
        transition: all 0.3s ease-in-out;
        color: #1B242F; }
        section:nth-of-type(3) #gallery .text .bold, section:nth-of-type(3) #gallery .button .bold {
          font-size: 16pt; }
      section:nth-of-type(3) #gallery .button {
        right: 0;
        bottom: 0;
        left: 0;
        position: absolute;
        border: 2px solid #E31B6D;
        width: 170px;
        margin: 0 auto;
        font-size: 13pt;
        padding: 7px 0; }
      section:nth-of-type(3) #gallery .mix {
        display: none;
        position: relative; }
        section:nth-of-type(3) #gallery .mix .waypoint {
          background: #fff; }
        section:nth-of-type(3) #gallery .mix .button:hover {
          background: #E31B6D;
          color: #fff; }
        section:nth-of-type(3) #gallery .mix:nth-child(1) .card {
          background: url("../img/thumb-1.jpg") center center/cover; }
        section:nth-of-type(3) #gallery .mix:nth-child(2) .card {
          background: url("../img/thumb-2.jpg") center center/cover; }
        section:nth-of-type(3) #gallery .mix:nth-child(3) .card {
          background: url("../img/thumb-3.jpg") center center/cover; }
        section:nth-of-type(3) #gallery .mix:nth-child(4) .card {
          background: url("../img/thumb-4.jpg") center center/cover; }
        section:nth-of-type(3) #gallery .mix:nth-child(5) .card {
          background: url("../img/thumb-5.jpg") center center/cover; }
        section:nth-of-type(3) #gallery .mix:nth-child(6) .card {
          background: url("../img/thumb-6.jpg") center center/cover; }
        section:nth-of-type(3) #gallery .mix:nth-child(7) .card {
          background: url("../img/thumb-7.jpg") center center/cover; }
        section:nth-of-type(3) #gallery .mix:nth-child(8) .card {
          background: url("../img/thumb-8.jpg") center center/cover; }
        section:nth-of-type(3) #gallery .mix:nth-child(9) .card {
          background: url("../img/thumb-9.jpg") center center/cover; }
        section:nth-of-type(3) #gallery .mix:nth-child(10) .card {
          background: url("../img/thumb-10.jpg") center center/cover; }
        section:nth-of-type(3) #gallery .mix:nth-child(11) .card {
          background: url("../img/thumb-11.jpg") center center/cover; }
        section:nth-of-type(3) #gallery .mix:nth-child(12) .card {
          background: url("../img/thumb-12.jpg") center center/cover; }
        section:nth-of-type(3) #gallery .mix .card {
          height: 240px;
          max-width: 100%;
          width: calc(50vw - 8px);
          cursor: pointer;
          transition: opacity .5s; }
        section:nth-of-type(3) #gallery .mix:hover .card {
          opacity: 0; }
        section:nth-of-type(3) #gallery .mix:hover .text {
          opacity: 1;
          top: 24%; }
        section:nth-of-type(3) #gallery .mix:hover .button {
          opacity: 1;
          bottom: 24%; }
  section .flex-50-gt-sm {
    display: block; }
  section:nth-of-type(4) {
    padding: 130px 0 100px 0;
    text-align: left; }
    section:nth-of-type(4) .flex.row-gt-sm, section:nth-of-type(4) .flex.wrap {
      align-items: flex-start; }
    section:nth-of-type(4) .gradient {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%; }
    section:nth-of-type(4) .blog-wrap {
      margin: 0 0 50px 0;
      padding: 0 2px;
      width: 100%;
      cursor: pointer; }
      section:nth-of-type(4) .blog-wrap #thumb-1 {
        background: url("../img/blog-1.jpg") center center/cover; }
      section:nth-of-type(4) .blog-wrap #thumb-2 {
        background: url("../img/blog-2.jpg") center center/cover; }
      section:nth-of-type(4) .blog-wrap #thumb-3 {
        background: url("../img/blog-3.jpg") center center/cover; }
      section:nth-of-type(4) .blog-wrap #thumb-4 {
        background: url("../img/blog-4.jpg") center center/cover; }
      section:nth-of-type(4) .blog-wrap .fade-wrap {
        transition: opacity .3s; }
      section:nth-of-type(4) .blog-wrap.fade .fade-wrap {
        opacity: 0.4; }
      section:nth-of-type(4) .blog-wrap.hover .fade-wrap .label {
        color: #04C2C9; }
    section:nth-of-type(4) .label {
      line-height: 14pt;
      font-size: 12pt;
      transition: color .3s ease-in-out; }
    section:nth-of-type(4) .thumb {
      height: 150px;
      margin: 0 0 15px 0; }
    section:nth-of-type(4) .date {
      font-size: 7pt;
      font-family: 'Open sans';
      margin: 5px 0 0 0; }
    section:nth-of-type(4) .bar {
      height: 3px;
      width: 25%;
      background: #04C2C9;
      margin: 10px 0px; }
    section:nth-of-type(4) .text {
      font-size: 9pt;
      line-height: 13pt;
      max-height: 85px; }
  section:nth-of-type(5) {
    background: #252934;
    color: #fff;
    padding-top: 175px; }
    section:nth-of-type(5) .header {
      color: #fff; }
    section:nth-of-type(5) .header-bar {
      margin: 25px 0 40px 0;
      background: #fff;
      width: 110px; }
    section:nth-of-type(5) .highlight {
      font-weight: 600;
      color: #04C2C9; }
    section:nth-of-type(5) svg {
      position: absolute;
      top: 0;
      left: 0; }
    section:nth-of-type(5) form {
      margin: 40px auto 0 auto;
      min-width: 95%; }
    section:nth-of-type(5) input[type="text"], section:nth-of-type(5) input[type="email"], section:nth-of-type(5) textarea {
      display: block;
      width: 100%;
      box-sizing: border-box;
      outline: none;
      border: 0;
      padding: 10px 15px;
      background: #1E242C;
      font-size: 12pt;
      margin-bottom: 3px;
      color: #fff; }
    section:nth-of-type(5) textarea {
      min-height: 150px;
      margin-bottom: 5px; }
    section:nth-of-type(5) .button {
      float: right;
      margin: 5px 0 0 0;
      font-size: 12pt;
      padding: 10px 30px;
      color: #fff;
      background: transparent;
      outline: 0; }
      section:nth-of-type(5) .button:hover {
        background: #04C2C9; }
    section:nth-of-type(5) #success {
      height: 0;
      width: 100%;
      overflow: hidden;
      position: relative;
      transition: height .25s; }
      section:nth-of-type(5) #success.expand {
        height: 36px; }
      section:nth-of-type(5) #success div {
        background: #04c986;
        color: #157051;
        font-size: 10pt;
        font-weight: 600;
        padding: 5px 0;
        border: 1px solid #157c59; }
    section:nth-of-type(5) #close {
      position: absolute;
      padding: 5px 15px;
      font-size: 12pt;
      font-weight: 600;
      right: 0;
      cursor: pointer; }

footer {
  background: #1B242F;
  padding: 70px 0 50px 0;
  position: relative; }
  footer .mdi-chevron-double-up {
    position: absolute;
    top: -25px;
    background: #E31B6D;
    font-size: 30pt;
    width: 47px;
    height: 50px;
    line-height: 40pt;
    left: 0;
    right: 0;
    margin: 0 auto;
    cursor: pointer;
    transition: background .5s; }
    footer .mdi-chevron-double-up:hover {
      background: #fb1f79; }
  footer .icon-wrap .icon {
    overflow: hidden;
    transition: background 0.3s, color 0.3s, box-shadow 0.3s, transform 0.3s;
    cursor: pointer;
    width: 55px;
    height: 55px;
    position: relative;
    text-align: center;
    margin: 0 15px;
    background: #262F38;
    font-size: 18pt; }
  footer .icon-wrap .mdi {
    text-align: center;
    color: #fff; }
    footer .icon-wrap .mdi.mdi-codepen {
      font-size: 20pt; }
  footer .icon-wrap .icon:hover {
    background: #04C2C9;
    box-shadow: 0 0 0 3px rgba(4, 94, 201, 0.1);
    transform: scale(0.9); }
    footer .icon-wrap .icon:hover .mdi {
      color: #fff; }
  footer .icon-wrap .icon:hover .mdi {
    -webkit-animation: toBottomFromTop 0.3s forwards;
    -moz-animation: toBottomFromTop 0.3s forwards;
    animation: toBottomFromTop 0.3s forwards; }
  footer .footnote {
    font-size: 10pt;
    color: #8F9AA7;
    margin-top: 35px;
    opacity: 0.6; }
    footer .footnote .highlight {
      font-family: 'Open Sans';
      color: #E31B6D; }

@media screen and (max-width: 400px) {
  section:nth-of-type(3) #gallery .mix .card {
    width: 100vw; } }
@media screen and (min-width: 600px) {
  body {
    font-size: 12pt; }

  .container {
    padding: 0 20px; }

  .header {
    font-size: 30pt; }

  .header-bar {
    margin: 25px 0 100px 0; }

  .label {
    font-size: 18pt; }

  .hex-wrap {
    height: 100px;
    width: 100px; }

  .slide, .carousel-wrap {
    height: 450px; }

  .mdi-chevron-left, .mdi-chevron-right {
    font-size: 25pt !important; }

  .modal-wrap .modal {
    top: -6vh;
    height: initial; }
  .modal-wrap .info-box {
    padding: 35px 60px 90px 25px; }
  .modal-wrap .title {
    font-size: 22pt;
    line-height: 30pt; }
  .modal-wrap .tag {
    font-size: 11pt; }
  .modal-wrap .detail {
    font-size: 11pt;
    line-height: 18pt;
    margin-top: 15px; }
  .modal-wrap .close {
    right: 25px; }
  .modal-wrap .button {
    left: 25px; }

  nav .link-wrap {
    position: initial;
    background: none;
    overflow: visible;
    height: initial;
    text-align: left; }
    nav .link-wrap .visible {
      height: initial; }
    nav .link-wrap div {
      margin: 0 20px;
      padding: initial;
      font-size: initial;
      display: inline; }
      nav .link-wrap div:first-child {
        padding: 0; }
  nav .mdi-menu {
    display: none; }

  section {
    line-height: 18pt;
    padding: 100px 0 130px 0; }
    section .container {
      padding: 0 10px; }
    section:nth-of-type(1) .text {
      font-size: 32pt;
      line-height: 36pt; }
    section:nth-of-type(1) .button {
      padding: 12px 50px 12px 20px; }
      section:nth-of-type(1) .button .mdi {
        top: 16px; }
    section:nth-of-type(2) .label-wrap .label {
      margin: 15px 0 5px 0; }
    section:nth-of-type(2) .label-wrap > div {
      padding: 0 15px; }
    section:nth-of-type(2) .bullet-wrap {
      height: 230px; }
    section:nth-of-type(2) .skills-wrapper > .flex:first-child {
      padding: 0 50px 0 50px; }
    section:nth-of-type(2) .skills-wrapper .me {
      height: 250px; }
    section:nth-of-type(2) .bar {
      height: 28px;
      margin: 0 0 15px 0;
      font-size: 11pt; }
      section:nth-of-type(2) .bar span {
        display: initial; }
      section:nth-of-type(2) .bar .tag {
        width: 110px; }
    section:nth-of-type(2) .hexagon i {
      font-size: 40pt; }
    section:nth-of-type(3) .filter {
      font-size: 11pt;
      margin: 0 15px;
      padding: 0 30px; }
    section:nth-of-type(3) .float-bar {
      height: 30px; }
    section:nth-of-type(3) #gallery .mix .card {
      height: 300px; }
    section:nth-of-type(4) {
      padding: 130px 0 180px 0; }
      section:nth-of-type(4) .label {
        line-height: 22pt;
        font-size: 16pt; }
      section:nth-of-type(4) .date {
        font-size: 8.5pt; }
      section:nth-of-type(4) .bar {
        margin: 15px 0px; }
      section:nth-of-type(4) .text {
        font-size: 11pt;
        line-height: 15pt; }
      section:nth-of-type(4) .blog-wrap {
        width: 400px; }
      section:nth-of-type(4) .thumb {
        height: 200px; }
    section:nth-of-type(5) form {
      min-width: 500px; } }
@media screen and (min-width: 960px) {
  .waypoint {
    opacity: 0; }

  .animated.waypoint#gallery {
    opacity: 1; }
    .animated.waypoint#gallery .mix:nth-child(1) > div {
      opacity: 0;
      animation: slideUp 0.75s 0.1s ease both; }
    .animated.waypoint#gallery .mix:nth-child(2) > div {
      opacity: 0;
      animation: slideUp 0.75s 0.2s ease both; }
    .animated.waypoint#gallery .mix:nth-child(3) > div {
      opacity: 0;
      animation: slideUp 0.75s 0.3s ease both; }
    .animated.waypoint#gallery .mix:nth-child(4) > div {
      opacity: 0;
      animation: slideUp 0.75s 0.4s ease both; }
    .animated.waypoint#gallery .mix:nth-child(5) > div {
      opacity: 0;
      animation: slideUp 0.75s 0.5s ease both; }
    .animated.waypoint#gallery .mix:nth-child(6) > div {
      opacity: 0;
      animation: slideUp 0.75s 0.6s ease both; }

  .animated.slide-up {
    animation: slideUp .75s ease both; }
  .animated.slide-down {
    animation: slideDown .75s ease both; }
  .animated.slide-in-left {
    animation: slideInLeft .75s ease both; }
  .animated.slide-in-right {
    animation: slideInRight .75s ease both; }
  .animated.flip-in-x {
    animation: flipInX .75s ease both; }
  .animated.fade-in {
    animation: fadeIn .75s ease both; }
  .animated.pop-in {
    animation: popIn 1s both; }

  .canvas {
    background: #252934; }

  .button {
    font-size: 16pt; }

  .flex.row-gt-sm {
    flex-direction: row; }

  .flex-50-gt-sm {
    -webkit-flex: 1 1 50%;
    -ms-flex: 1 1 50%;
    flex: 1 1 50%;
    max-width: 50%;
    max-height: 100%;
    box-sizing: border-box; }

  section:nth-of-type(2) .bars-wrap {
    margin: 0 0 0 0; }
  section:nth-of-type(2) .skills-wrapper {
    margin: 50px 0 0 0; }
    section:nth-of-type(2) .skills-wrapper .me {
      margin: 0; }
  section:nth-of-type(2) .bar {
    max-width: 90%; }
  section:nth-of-type(2) .bullet-wrap {
    margin: 0;
    padding: 0 10px;
    height: intial; }
  section:nth-of-type(3) #gallery .mix .card {
    width: 390px; }
  section:nth-of-type(3) .filter {
    font-size: 13pt;
    padding: 0 40px;
    margin: 0 25px; }
  section:nth-of-type(4) .blog-wrap {
    width: 400px;
    margin: 0 0 50px 20px;
    opacity: 0; } }
@media screen and (min-width: 1280px) {
  section:nth-of-type(4) .blog-wrap {
    width: 270px;
    margin: 0 0 50px 20px; } }

/*# sourceMappingURL=style.css.map */