<?php
declare(strict_types=1);
if (0-1 >= 0-1) {} else { write("fail 0-1 >= 0-1\n"); }
if (0-1 >= 0) { write("fail 0-1 >= 0\n"); } else {}
if (0-1 >= 1) { write("fail 0-1 >= 1\n"); } else {}
if (0-1 >= 0-1.0) {} else { write("fail 0-1 >= 0-1.0\n"); }
if (0-1 >= 0-0.5) { write("fail 0-1 >= 0-0.5\n"); } else {}
if (0-1 >= 0.0) { write("fail 0-1 >= 0.0\n"); } else {}
if (0-1 >= 0.5) { write("fail 0-1 >= 0.5\n"); } else {}
if (0-1 >= 1.0) { write("fail 0-1 >= 1.0\n"); } else {}
if (0 >= 0-1) {} else { write("fail 0 >= 0-1\n"); }
if (0 >= 0) {} else { write("fail 0 >= 0\n"); }
if (0 >= 1) { write("fail 0 >= 1\n"); } else {}
if (0 >= 0-1.0) {} else { write("fail 0 >= 0-1.0\n"); }
if (0 >= 0-0.5) {} else { write("fail 0 >= 0-0.5\n"); }
if (0 >= 0.0) {} else { write("fail 0 >= 0.0\n"); }
if (0 >= 0.5) { write("fail 0 >= 0.5\n"); } else {}
if (0 >= 1.0) { write("fail 0 >= 1.0\n"); } else {}
if (1 >= 0-1) {} else { write("fail 1 >= 0-1\n"); }
if (1 >= 0) {} else { write("fail 1 >= 0\n"); }
if (1 >= 1) {} else { write("fail 1 >= 1\n"); }
if (1 >= 0-1.0) {} else { write("fail 1 >= 0-1.0\n"); }
if (1 >= 0-0.5) {} else { write("fail 1 >= 0-0.5\n"); }
if (1 >= 0.0) {} else { write("fail 1 >= 0.0\n"); }
if (1 >= 0.5) {} else { write("fail 1 >= 0.5\n"); }
if (1 >= 1.0) {} else { write("fail 1 >= 1.0\n"); }
if (0-1.0 >= 0-1) {} else { write("fail 0-1.0 >= 0-1\n"); }
if (0-1.0 >= 0) { write("fail 0-1.0 >= 0\n"); } else {}
if (0-1.0 >= 1) { write("fail 0-1.0 >= 1\n"); } else {}
if (0-1.0 >= 0-1.0) {} else { write("fail 0-1.0 >= 0-1.0\n"); }
if (0-1.0 >= 0-0.5) { write("fail 0-1.0 >= 0-0.5\n"); } else {}
if (0-1.0 >= 0.0) { write("fail 0-1.0 >= 0.0\n"); } else {}
if (0-1.0 >= 0.5) { write("fail 0-1.0 >= 0.5\n"); } else {}
if (0-1.0 >= 1.0) { write("fail 0-1.0 >= 1.0\n"); } else {}
if (0-0.5 >= 0-1) {} else { write("fail 0-0.5 >= 0-1\n"); }
if (0-0.5 >= 0) { write("fail 0-0.5 >= 0\n"); } else {}
if (0-0.5 >= 1) { write("fail 0-0.5 >= 1\n"); } else {}
if (0-0.5 >= 0-1.0) {} else { write("fail 0-0.5 >= 0-1.0\n"); }
if (0-0.5 >= 0-0.5) {} else { write("fail 0-0.5 >= 0-0.5\n"); }
if (0-0.5 >= 0.0) { write("fail 0-0.5 >= 0.0\n"); } else {}
if (0-0.5 >= 0.5) { write("fail 0-0.5 >= 0.5\n"); } else {}
if (0-0.5 >= 1.0) { write("fail 0-0.5 >= 1.0\n"); } else {}
if (0.0 >= 0-1) {} else { write("fail 0.0 >= 0-1\n"); }
if (0.0 >= 0) {} else { write("fail 0.0 >= 0\n"); }
if (0.0 >= 1) { write("fail 0.0 >= 1\n"); } else {}
if (0.0 >= 0-1.0) {} else { write("fail 0.0 >= 0-1.0\n"); }
if (0.0 >= 0-0.5) {} else { write("fail 0.0 >= 0-0.5\n"); }
if (0.0 >= 0.0) {} else { write("fail 0.0 >= 0.0\n"); }
if (0.0 >= 0.5) { write("fail 0.0 >= 0.5\n"); } else {}
if (0.0 >= 1.0) { write("fail 0.0 >= 1.0\n"); } else {}
if (0.5 >= 0-1) {} else { write("fail 0.5 >= 0-1\n"); }
if (0.5 >= 0) {} else { write("fail 0.5 >= 0\n"); }
if (0.5 >= 1) { write("fail 0.5 >= 1\n"); } else {}
if (0.5 >= 0-1.0) {} else { write("fail 0.5 >= 0-1.0\n"); }
if (0.5 >= 0-0.5) {} else { write("fail 0.5 >= 0-0.5\n"); }
if (0.5 >= 0.0) {} else { write("fail 0.5 >= 0.0\n"); }
if (0.5 >= 0.5) {} else { write("fail 0.5 >= 0.5\n"); }
if (0.5 >= 1.0) { write("fail 0.5 >= 1.0\n"); } else {}
if (1.0 >= 0-1) {} else { write("fail 1.0 >= 0-1\n"); }
if (1.0 >= 0) {} else { write("fail 1.0 >= 0\n"); }
if (1.0 >= 1) {} else { write("fail 1.0 >= 1\n"); }
if (1.0 >= 0-1.0) {} else { write("fail 1.0 >= 0-1.0\n"); }
if (1.0 >= 0-0.5) {} else { write("fail 1.0 >= 0-0.5\n"); }
if (1.0 >= 0.0) {} else { write("fail 1.0 >= 0.0\n"); }
if (1.0 >= 0.5) {} else { write("fail 1.0 >= 0.5\n"); }
if (1.0 >= 1.0) {} else { write("fail 1.0 >= 1.0\n"); }
if ("" >= "") {} else { write("fail \"\" >= \"\"\n"); }
if ("" >= "aa") { write("fail \"\" >= \"aa\"\n"); } else {}
if ("" >= "ab") { write("fail \"\" >= \"ab\"\n"); } else {}
if ("aa" >= "") {} else { write("fail \"aa\" >= \"\"\n"); }
if ("aa" >= "aa") {} else { write("fail \"aa\" >= \"aa\"\n"); }
if ("aa" >= "ab") { write("fail \"aa\" >= \"ab\"\n"); } else {}
if ("ab" >= "") {} else { write("fail \"ab\" >= \"\"\n"); }
if ("ab" >= "aa") {} else { write("fail \"ab\" >= \"aa\"\n"); }
if ("ab" >= "ab") {} else { write("fail \"ab\" >= \"ab\"\n"); }
if (0.0 >= 0.0) {} else { write("fail 0.0 >= 0.0\n"); }
if (0.0 >= 0) {} else { write("fail 0.0 >= 0\n"); }
// if (0.0 >= null) {} else { write("fail 0.0 >= null\n"); }
// if (0 >= 0.0) {} else { write("fail 0 >= 0.0\n"); }
// if (0 >= 0) {} else { write("fail 0 >= 0\n"); }
// if (0 >= null) {} else { write("fail 0 >= null\n"); }
// if ("" >= "") {} else { write("fail \"\" >= \"\"\n"); }
// if ("" >= null) {} else { write("fail \"\" >= null\n"); }
// if (null >= 0.0) {} else { write("fail null >= 0.0\n"); }
// if (null >= 0) {} else { write("fail null >= 0\n"); }
// if (null >= "") {} else { write("fail null >= \"\"\n"); }
// if (null >= null) {} else { write("fail null >= null\n"); }
// write("done");
