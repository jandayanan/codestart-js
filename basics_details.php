<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Basics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>JavaScript Basics</h1>
        <section>
            <h2 id="basic-syntax">Basic syntax</h2>

            <p class="list incremental">JavaScript is <strong>case-sensitive</strong>. <strong>Lines end by semicolon
                    <code>;</code></strong>. <strong>Block are delimited curly brackets by <code>{ }</code></strong>.
                Comments are between <strong><code>/* */</code> for multiple lines</strong> or after
                <strong><code>//</code>
                    for one line</strong>.</p>
        </section>

        <section>
            <h2 id="variables-amp-types">Variables &amp; Types</h2>

            <p class="list incremental">In JavaScript, <strong>Typing is dynamic</strong>. Therefore, there is
                <strong>NO
                    type declaration</strong> before variable names. Instead we use a <strong>unique keyword :
                    <code>var</code></strong>. Note that a variable <strong>can be declared several times</strong>. If
                it&#39;s non-declared, the variable is <strong>automatically allocated at the first use</strong>.</p>
        </section>

        <section>
            <h3>Number</h3>
            <p>Numbers like in any other languages are really important. Don&#39;t forget that a computer is primarly a
                super calculator. Integers and floats have the same type : <code>Number</code>. Of course, a variable
                can
                only be identified as type <code>Number</code> at execution time..</p>
            <p>If you want to manipulate numbers, the objects <code>Number</code> and <code>Math</code> has lots of
                useful
                properties and methods. The other useful way to manipulate them is operators of course. See reference
                for
                more details.</p>

            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="comment">// Integer</span>
<span class="keyword">var</span> i;            <span class="comment">// first declaration of i (type is undefined)</span>
i = <span class="number">2</span>;            <span class="comment">// i is now a integer (type is number)</span></code></pre>

            <p>In this example we see that floats can have strange behaviour, don&#39;t forget the internals of the
                float
                storage. It&#39;s stored as <a href="http://en.wikipedia.org/wiki/IEEE_floating_point">IEEE 754</a>.</p>

            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="comment">// Float</span>
<span class="keyword">var</span> i = -<span class="number">5.01</span>;    <span class="comment">// second declaration of i as a float (type is number)</span>
j = <span class="number">2</span>;            <span class="comment">// j was not declared, automatic assignement to 2</span>
j = i + <span class="number">1.12</span>;     <span class="comment">// j is now a float equal to 3.12 (still number)</span>
<span class="comment">// Be careful</span>
<span class="keyword">var</span> k = <span class="number">0.1</span> + <span class="number">0.2</span> <span class="comment">// k => 0.30000000000000004</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> l = <span class="keyword">new</span> Number(<span class="number">7</span>);    <span class="comment">// DO NOT USE : type is object and not number</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="comment">// Specials</span>
<span class="keyword">var</span> a = <span class="number">10</span> / <span class="number">0</span>;           <span class="comment">// => Infinity</span>
<span class="keyword">var</span> b = -<span class="number">10</span> / <span class="number">0</span>;          <span class="comment">// => -Infinity</span>
<span class="keyword">var</span> c = Math.sqrt(-<span class="number">1</span>);    <span class="comment">// => NaN : Not a Number</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Global_Objects/Number">Number
                        reference
                        (MDN)</a></li>
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Global_Objects/Math">Math reference
                        (MDN)</a></li>
                <li><a href="http://stackoverflow.com/questions/369220/why-should-you-not-use-number-as-a-constructor">Why
                        should you not use Number as a constructor? (stack overflow)</a></li>
                <li><a href="http://www.hunlock.com/blogs/The_Complete_JavaScript_Number_Reference#quickIDX8">The_Complete_JavaScript_Number_Reference,
                        usage of new Number(2) (hunlock)</a></li>
            </ul>
        </section>

        <section>
            <h3>String</h3>
            <p>Strings are really simple. Quotes or double quotes, no differences, some text in it and you&#39;re done.
                The
                most important property of a String when it comes to manipulation is <code>length</code>. It&#39;s not
                the
                only one, the <code>String</code> object contains a lot of useful properties and methods, see reference
                for
                more details.</p>
            <p>The other way a good programer should manipulate string is regular expressions and as expected,
                JavaScript
                provides a regex engine and a <code>RegExp</code> object. Regex can be complicated to master, but the
                game
                is worth it since it&#39;s a multi language concept. See reference for more details.</p>

            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> a = <span class="string">""</span>; <span class="comment">// The empty string: it has zero characters</span>
<span class="keyword">var</span> b = <span class="string">'There is no spoon.'</span>;
<span class="keyword">var</span> c = <span class="string">"Only human."</span>;
<span class="keyword">var</span> d = <span class="string">'pill="red"'</span>;
<span class="keyword">var</span> e = <span class="string">"Free your mind."</span>;
<span class="keyword">var</span> f = <span class="string">"You're empty.\nSo are you."</span>; <span class="comment">// Type of all variables is string</span></code></pre>


            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">var</span> g = <span class="keyword">new</span> String(<span class="string">"Welcome to the real world."</span>);
<span class="comment">// DO NOT USE : type is object and not string</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Global_Objects/String">String
                        reference
                        (MDN)</a></li>
                <li><a href="https://developer.mozilla.org/en/JavaScript/Guide/Regular_Expressions">Regex reference
                        (MDN)</a></li>
                <li><a href="http://www.regular-expressions.info/">regular-expressions.info</a></li>
                <li><a href="http://gskinner.com/RegExr/">Online testing tool (gskinner.com)</a></li>
            </ul>
        </section>

        <section>
            <h3>Boolean</h3>
            <p>Nothing fancy here, <code>true</code> of <code>false</code>. You&#39;ll see later that other types of
                variables (Number, String...) can by evaluated as booleans according to some rules.</p>

            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> realWorld = <span class="literal">false</span>;
<span class="keyword">var</span> matrix = <span class="literal">true</span>;         <span class="comment">// Type of all variables is boolean</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> a = <span class="keyword">new</span> Boolean(<span class="literal">true</span>); <span class="comment">// DO NOT USE : type is object and not boolean</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Global_Objects/Boolean">Boolean
                        reference
                        (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h3>null and undefined</h3>

            <p class="list incremental">Both <code>null</code> and <code>undefined</code> are used for <strong>absence
                    of a
                    value</strong>. One is used when the variable <strong>has been initialiazed :
                    <code>null</code></strong>. The other one is used when the variable <strong>has not been initialized
                    :
                    <code>undefined</code></strong>. It can be returned by <strong>function that have no
                    <code>return</code>
                    statement</strong>.</p>

            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">var</span> neo;      <span class="comment">// Type is undefined</span>
neo = <span class="literal">null</span>;   <span class="comment">// Type is object</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Operators/Special/typeof">Typeof null
                        is
                        object (MDN)</a></li>
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Global_Objects/undefined">undefined
                        reference (MDN)</a></li>
            </ul>
        </section>

        <section class="cover">
            <h2 id="arrays">Arrays</h2>
            <p>An array is an ordered colleciton of values. Values can be of different types. Each value is called an
                element and is positioned in the array with a numeric index starting at zero.</p>
            <p>The <code>Array</code> object has several properties and methods. The most important property is
                <code>length</code>, it contains the size of the array. See reference for more details.
            </p>

            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Global_Objects/Array">Array reference
                        (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h3>Creating</h3>
            <p>The easiest way to create an array is with square brackets and comma separated values in it. Note that
                you
                can create an array with 4 undefined elements, length will be 4.</p>
            <pre
                data-language="javascript"><code class="language-javascript"><span class="keyword">var</span> a = [];                         <span class="comment">// no elements</span>
<span class="keyword">var</span> b = <span class="keyword">new</span> Array();                <span class="comment">// equivalent to a</span>
<span class="keyword">var</span> c = [,,,,];                     <span class="comment">// 4 elements, all undefined.</span>
<span class="keyword">var</span> d = <span class="keyword">new</span> Array(<span class="number">4</span>);               <span class="comment">// equivalent to c</span>
<span class="keyword">var</span> e = [<span class="string">"the"</span>, <span class="number">1</span>, <span class="literal">true</span>];           <span class="comment">// 3 elements of different types</span>
<span class="keyword">var</span> f = <span class="keyword">new</span> Array(<span class="string">"the"</span>, <span class="number">1</span>, <span class="literal">true</span>);  <span class="comment">// equivalent to e</span></code></pre>

        </section>

        <section>
            <h3>Reading and writing</h3>
            <p>Reading and writing in arrays is done with brackets and equal assignment operator. Note that reading from
                and
                index that haven&#39;t been initialized doesn&#39;t generate any errors, it returns
                <code>undefined</code>.
            </p>
            <p>You can insert values in non consecutive indexes, it create a what&#39;s called a &quot;sparse
                array&quot;.
                The length is updated to maximum index + 1.</p>

            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> a = [<span class="string">"white"</span>];    <span class="comment">// Start with a one-element array</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> b = a[<span class="number">0</span>];         <span class="comment">// b => "white"</span>
<span class="keyword">var</span> c = a[<span class="number">100</span>];       <span class="comment">// c => undefined (no error)</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript">a[<span class="number">1</span>] = <span class="number">3.14</span>;          <span class="comment">// a => ["white", 3.14]</span>
<span class="keyword">var</span> i = <span class="number">2</span>;
a[i] = <span class="number">3</span>;             <span class="comment">// a => ["white", 3.14, 3]</span>
a[i + <span class="number">1</span>] = <span class="string">"rabbit"</span>;  <span class="comment">// a => ["white", 3.14, 3, "rabbit"]</span>
a[a[i]] = a[<span class="number">0</span>];       <span class="comment">// a => ["white", 3.14, 3, "white"]</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> d = a.length;     <span class="comment">// d => 4</span></code></pre>

        </section>

        <section>
            <h3>Adding and deleting</h3>
            <p>To add and delete elements from an array, you can use the methods from the <code>Array</code> object.
                There&#39;s a lot of useful ones, from simple <code>pop</code> and <code>push</code> to more complex
                ones
                like <code>splice</code>. See reference for more details.</p>

            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> a = [<span class="string">"follow"</span>, <span class="string">"the"</span>, <span class="string">"white"</span>, <span class="string">"rabbit"</span>];</code></pre>


            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">var</span> b = a.pop();             <span class="comment">// a => ["follow", "the", "white"]</span>
                             <span class="comment">// b => "rabbit"</span>
<span class="keyword">var</span> c = a.push(<span class="string">"RABBIT"</span>);    <span class="comment">// a => ["follow", "the", "white", "RABBIT"]</span>
                             <span class="comment">// c => 4 (new length)</span></code></pre>


            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">var</span> d = a.shift();           <span class="comment">// a => ["the", "white", "RABBIT"]</span>
                             <span class="comment">// d => "follow"</span>
<span class="keyword">var</span> e = a.unshift(<span class="string">"FOLLOW"</span>); <span class="comment">// a => ["FOLLOW", "the", "white", "RABBIT"]</span>
                             <span class="comment">// e => 4 (new length)</span></code></pre>


            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">var</span> f = a.splice(<span class="number">2</span>, <span class="number">1</span>);       <span class="comment">// a => ["FOLLOW", "the", "RABBIT"]</span>
                              <span class="comment">// f => "white"</span>
<span class="keyword">var</span> g = a.splice(<span class="number">1</span>, <span class="number">2</span>, <span class="string">"ME"</span>); <span class="comment">// a => ["FOLLOW", "ME"]</span>
                              <span class="comment">// g => ["the", "RABBIT"]</span></code></pre>

        </section>

        <section class="cover">
            <h2 id="operators">Operators</h2>
            <p>Operators are really powerful in JavaScript. Unlike in some other languages like C, operators are not
                only
                used to do maths, they are also very useful with strings.</p>

            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/operators/operator_precedence">Operator
                        Precedence reference (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h3>Arithmetics</h3>
            <p>Arithmetics operators work the same way as a lot of other programming languages. Note that <code>+</code>
                is
                used to concatenate strings.</p>

            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> a = <span class="number">6</span> + <span class="number">4</span>;                    <span class="comment">// a => 10</span>
<span class="keyword">var</span> b = -a;                       <span class="comment">// b => -10</span>
<span class="keyword">var</span> c = <span class="number">6</span> - <span class="number">4</span>;                    <span class="comment">// c => 2</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> d = <span class="number">1</span>, e = ++d;               <span class="comment">// d and e are both 2</span>
<span class="keyword">var</span> f = <span class="number">1</span>, g = f++;               <span class="comment">// f is 2, g is 1</span>
<span class="keyword">var</span> h = <span class="number">7</span>, i = --h;               <span class="comment">// h and i are both 6</span>
<span class="keyword">var</span> j = <span class="number">7</span>, k = j--;               <span class="comment">// j is 6, k is 7</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> l = <span class="number">3</span> * <span class="number">3</span>                     <span class="comment">// l => 9</span>
<span class="keyword">var</span> m = <span class="number">10</span> / <span class="number">3</span>                    <span class="comment">// m => 3.3333333333333335</span>
<span class="keyword">var</span> n = <span class="number">10</span> % <span class="number">3</span>                    <span class="comment">// n => 1</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> o = <span class="string">"Dodge"</span> + <span class="string">" "</span> + <span class="string">"this."</span>   <span class="comment">// o => "Dodge this.";</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Operators/Arithmetic_Operators">Arithmetics
                        operators reference (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h3>Equality</h3>
            <p>A particularity of JavaScript is the two kinds of equality comparison : strict and type-converting. Just
                remember that strict equal <code>===</code> compares both types and values and type-converting equal
                <code>==</code> converts one type to the other and just compares values.
            </p>
            <p>Best practice is to always use the strict equality. It prevents a lot of mistakes.</p>

            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="comment">// Equality</span>
<span class="keyword">var</span> a = <span class="string">"2"</span> == <span class="number">2</span>;    <span class="comment">// a => true</span>
<span class="keyword">var</span> b = <span class="string">"2"</span> != <span class="number">2</span>;    <span class="comment">// b => false</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="comment">// Strict equality</span>
<span class="keyword">var</span> c = <span class="string">"2"</span> === <span class="number">2</span>;   <span class="comment">// c => false</span>
<span class="keyword">var</span> d = <span class="string">"2"</span> !== <span class="number">2</span>;   <span class="comment">// d => true</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Operators/Comparison_Operators">Comparison
                        operators reference (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h3>Comparison</h3>
            <p>Like arithmetics, comparison operators work the same way as a lot of other programming languages. Note
                that
                these operators can be used to compare string.</p>

            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> a = <span class="number">2</span> > <span class="number">2</span>;          <span class="comment">// a => false</span>
<span class="keyword">var</span> b = <span class="number">2</span> &lt;= <span class="number">2</span>;         <span class="comment">// b => true</span>
<span class="keyword">var</span> c = <span class="string">"2"</span> >= <span class="number">2</span>;       <span class="comment">// c => true</span>
<span class="keyword">var</span> d = <span class="number">2</span> &lt; <span class="number">2</span>;          <span class="comment">// d => false</span>
<span class="keyword">var</span> e = <span class="number">2</span> &lt;= <span class="number">2</span>;         <span class="comment">// e => true</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> f = <span class="string">'abc'</span> &lt; <span class="string">'def'</span>   <span class="comment">// f => true</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Operators/Comparison_Operators">Comparison
                        operators reference (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h3>Logical</h3>
            <pre
                data-language="javascript"><code class="language-javascript"><span class="keyword">var</span> a = <span class="literal">true</span> &amp;&amp; <span class="literal">false</span>;  <span class="comment">// a => false</span>
<span class="keyword">var</span> b = <span class="literal">true</span> || <span class="literal">false</span>;  <span class="comment">// b => true</span>
<span class="keyword">var</span> c = !<span class="literal">true</span>;          <span class="comment">// c => false</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Operators/Logical_Operators">Logical
                        operators reference (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h3>Bitwise</h3>
            <p>Bitwise operators help programmers to use numbers like sequences of 32 bits (zeros and ones). It&#39;s
                not
                always easy to understand what&#39;s going on but it&#39;s very useful, for example if you&#39;re
                implementing bitmasks.</p>
            <pre
                data-language="javascript"><code class="language-javascript"><span class="keyword">var</span> a = <span class="number">42</span> &amp; <span class="number">2</span>   <span class="comment">// a =>          2  (AND)</span>
<span class="keyword">var</span> b =  <span class="number">7</span> | <span class="number">2</span>   <span class="comment">// b =>          2  (OR)</span>
<span class="keyword">var</span> c =  <span class="number">7</span> ^ <span class="number">2</span>   <span class="comment">// c =>          7  (XOR)</span>
<span class="keyword">var</span> d = ~<span class="number">8</span>       <span class="comment">// d =>         -7  (NOT)</span>
<span class="keyword">var</span> e =  <span class="number">1</span> &lt;&lt; <span class="number">3</span>  <span class="comment">// e =>          8  (Shift left)</span>
<span class="keyword">var</span> f =  <span class="number">8</span> >> <span class="number">2</span>  <span class="comment">// f =>          2  (Shift right)</span>
<span class="keyword">var</span> g = -<span class="number">1</span> >>  <span class="number">2</span> <span class="comment">// g =>         -1</span>
<span class="keyword">var</span> h = -<span class="number">1</span> >>> <span class="number">2</span> <span class="comment">// h => 1073741823  (Shift right with zero fill)</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Operators/Bitwise_Operators">Bitwise
                        operators reference (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h3>Assignement</h3>
            <p>Assignement operators saves you some place and can improve code readability. Use them carefuly!</p>
            <pre data-language="javascript"><code class="language-javascript"><span class="keyword">var</span> a = <span class="number">1</span>, b = <span class="number">0</span>;
a += b    <span class="comment">// a = a + b</span>
a -= b    <span class="comment">// a = a - b</span>
a *= b    <span class="comment">// a = a * b</span>
a /= b    <span class="comment">// a = a / b</span>
a %= b    <span class="comment">// a = a % b</span>
a &lt;&lt;= b   <span class="comment">// a = a &lt;&lt; b</span>
a >>= b   <span class="comment">// a = a >> b</span>
a >>>= b  <span class="comment">// a = a >>> b</span>
a &amp;= b    <span class="comment">// a = a &amp; b</span>
a |= b    <span class="comment">// a = a | b</span>
a ^= b    <span class="comment">// a = a ^ b</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Operators/Assignment_Operators">Assignment
                        operators reference (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h3><code>in</code></h3>
            <p>The <code>in</code> operator is used to verify if a property is specified on an object. Be careful when
                you
                use it.</p>
            <pre
                data-language="javascript"><code class="language-javascript"><span class="keyword">var</span> a = [<span class="number">1</span>,<span class="number">9</span>,<span class="number">4</span>];
<span class="keyword">var</span> b = (<span class="number">2</span> <span class="keyword">in</span> a);          <span class="comment">// b => true</span>
<span class="keyword">var</span> c = (<span class="number">9</span> <span class="keyword">in</span> a);          <span class="comment">// c => false</span>
<span class="keyword">var</span> d = (length <span class="keyword">in</span> a);     <span class="comment">// d => true</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Operators/Special/in">in operator
                        reference (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h3><code>typeof</code></h3>
            <p><code>typeof</code> is used at compilation time to verify the type of a variable.</p>
            <pre
                data-language="javascript"><code class="language-javascript"><span class="keyword">var</span> a = <span class="number">3</span>;
<span class="keyword">var</span> b = <span class="keyword">typeof</span> a;   <span class="comment">// b => "number"</span>
<span class="keyword">var</span> c = <span class="string">""</span>;
<span class="keyword">var</span> d = <span class="keyword">typeof</span> c;   <span class="comment">// d => "string"</span>
<span class="keyword">var</span> e = <span class="literal">true</span>;
<span class="keyword">var</span> f = <span class="keyword">typeof</span> e;   <span class="comment">// f => "boolean"</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Operators/Special/in">in operator
                        reference (MDN)</a></li>
            </ul>
        </section>

        <section class="cover">
            <h2 id="type-conversions">Type conversions</h2>
            <p>JavaScript is not statically typed but you can determine the type of a variable at execution time.
                Conversion
                from one type to another can be done explicitly or implicitly. It&#39;s really important to understand
                implicit ones, they can help you to avoid strange behaviours and bugs.</p>
        </section>

        <section>
            <h3>Explicit</h3>
            <p>Explicit conversions can for example help you to convert a string to a number. Note that even if integers
                and
                floats are both number, using <code>parseInt</code> on a float removes the decimals and makes it by
                definition an integer.</p>

            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="comment">// to Number</span>
<span class="keyword">var</span> a = Number(<span class="string">"10"</span>);         <span class="comment">// a => 10</span>
<span class="keyword">var</span> b = Number(<span class="literal">false</span>);        <span class="comment">// b =>  0</span>
<span class="keyword">var</span> c = parseInt(<span class="string">"10"</span>, <span class="number">10</span>);   <span class="comment">// c => 10</span>
<span class="keyword">var</span> d = parseInt(<span class="number">10.2</span>);       <span class="comment">// d => 10</span>
<span class="keyword">var</span> e = parseFloat(<span class="string">"10.2"</span>);   <span class="comment">// e => 10.2</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="comment">// to String</span>
<span class="keyword">var</span> a = String(<span class="literal">false</span>);        <span class="comment">// a => "false"</span>
<span class="keyword">var</span> b = String(<span class="number">10</span>);           <span class="comment">// b => "10"</span>
<span class="keyword">var</span> c = String(<span class="number">10.2</span>);         <span class="comment">// c => "10.2"</span>
<span class="keyword">var</span> d = (<span class="number">10</span>).toString();      <span class="comment">// d => "10"</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="comment">// to Boolean</span>
<span class="keyword">var</span> a = Boolean(<span class="number">10</span>);          <span class="comment">// a => true</span>
<span class="keyword">var</span> b = Boolean(<span class="number">0</span>);           <span class="comment">// b => false</span>
<span class="keyword">var</span> c = Boolean(<span class="number">0.3</span>);         <span class="comment">// c => true</span>
<span class="keyword">var</span> d = Boolean(<span class="string">"true"</span>);      <span class="comment">// d => true</span></code></pre>

        </section>

        <section>
            <h3>Implicit</h3>
            <p>There&#39;s a lot of ways to convert a string to a number. Performances can differ a lot depending on the
                technique used and the plateform. A shorter syntax is often prefered for bandwith uses.</p>
            <p>Look carefully how the <code>+</code> operator behaves with strings and numbers.</p>

            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="comment">// to Number</span>
<span class="keyword">var</span> a = +<span class="string">"10"</span>;            <span class="comment">// a => 10</span>
<span class="keyword">var</span> b = <span class="string">"10"</span> >> <span class="number">0</span>;        <span class="comment">// b => 10</span>
<span class="keyword">var</span> c = <span class="string">"10"</span> * <span class="number">1</span>;         <span class="comment">// c => 10</span>
<span class="keyword">var</span> d = ~~<span class="string">"10"</span>;           <span class="comment">// d => 10</span>
<span class="keyword">var</span> e = <span class="string">"2"</span> * <span class="string">"5"</span>;        <span class="comment">// e => 10 (both strings converts to number)</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="comment">// to String</span>
<span class="keyword">var</span> a = <span class="number">10</span> + <span class="string">"10"</span>;             <span class="comment">// a => "1010"</span>
<span class="keyword">var</span> b = <span class="string">"10"</span> + <span class="string">"10"</span>;           <span class="comment">// b => "1010"</span>
<span class="keyword">var</span> c = <span class="number">10</span> + <span class="string">" agents"</span>;        <span class="comment">// c => "10 agents"</span>
<span class="keyword">var</span> d = <span class="number">10</span> + <span class="number">10</span> + <span class="string">" agents"</span>;   <span class="comment">// d => "20 agents"</span></code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="comment">// to Boolean</span>
<span class="keyword">var</span> a = !!<span class="string">'morpheus'</span>;     <span class="comment">// a => true</span>
<span class="keyword">var</span> b = !!<span class="string">''</span>;             <span class="comment">// b => false</span>
<span class="keyword">var</span> c = !!<span class="string">'0'</span>;            <span class="comment">// c => true</span>
<span class="keyword">var</span> d = !!<span class="string">'1'</span>;            <span class="comment">// d => true</span></code></pre>


            <ul class="useful-links">
                <li><a href="http://jsperf.com/number-vs-parseint-vs-plus/3">String to number comparison
                        (jsperf.com)</a>
                </li>
            </ul>
        </section>

        <section>
            <h3>Summary</h3>
            <p>Here&#39;s a little summary of conversions results. Pay attention especially to &quot;anything to
                boolean&quot; conversions, it can save you some time when used in <code>if</code> conditions.</p>
            <table class="incremental table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Value
                        <th>String
                        <th>Number
                        <th>Boolean
                </thead>
                <tbody>
                    <tr>
                        <td>undefined
                        <td>&quot;undefined&quot;
                        <td>NaN
                        <td>false
                    <tr>
                        <td>null
                        <td>&quot;null&quot;
                        <td>0
                        <td>false
                </tbody>
                <tbody>
                    <tr>
                        <td>true
                        <td>&quot;true&quot;
                        <td>1
                        <td>
                    <tr>
                        <td>false
                        <td>&quot;false&quot;
                        <td>0
                        <td>
                </tbody>
                <tbody>
                    <tr>
                        <td>&quot;&quot; (empty string)
                        <td>
                        <td>0
                        <td>false
                    <tr>
                        <td>&quot;1.2&quot; (nonempty, numeric)
                        <td>
                        <td>1.2
                        <td>true
                    <tr>
                        <td>&quot;one&quot; (nonempty, non-numeric)
                        <td>
                        <td>NaN
                        <td>true
                </tbody>
                <tbody>
                    <tr>
                        <td>0
                        <td>&quot;0&quot;
                        <td>
                        <td>false
                    <tr>
                        <td>-0
                        <td>&quot;0&quot;
                        <td>
                        <td>false
                    <tr>
                        <td>NaN
                        <td>&quot;NaN&quot;
                        <td>
                        <td>false
                    <tr>
                        <td>Infinity
                        <td>&quot;Infinity&quot;
                        <td>
                        <td>true
                    <tr>
                        <td>-Infinity
                        <td>&quot;-Infinity&quot;
                        <td>
                        <td>true
                    <tr>
                        <td>1 (finite, non-zero)
                        <td>&quot;1&quot;
                        <td>
                        <td>true
                </tbody>
                <tbody>
                    <tr>
                        <td>[] (empty array)
                        <td>&quot;&quot;
                        <td>0
                        <td>true
                    <tr>
                        <td>[9] (1 numeric elt)
                        <td>&quot;9&quot;
                        <td>9
                        <td>true
                    <tr>
                        <td>[&#39;a&#39;] (any other array)
                        <td>use join() method
                        <td>NaN
                        <td>true
                </tbody>
            </table>

        </section>

        <section class="cover">
            <h2 id="statements">Statements</h2>
        </section>

        <section>
            <h3>Conditionnal</h3>
            <p>In JavaScript, conditionnal statements behaves pretty much like in other common languages.</p>
            <p>Note that the conditional ternary operator should only be used in simple cases. It is often use for
                variable
                assignment and its usage is synonym of shorter syntax and readability. If you think it doesn&#39;t make
                your
                code better, use a classic <code>if</code>.</p>
            <h4>if/else</h4>
            <p>In this case, normal equality is handy, used with <code>null</code>, it can test null ||
                <code>undefined</code>.
            </p>

            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">if</span> (username == <span class="literal">null</span>) {  <span class="comment">// if username is null or undefined,</span>
  username = <span class="string">"Trinity"</span>;  <span class="comment">// define it</span>
}</code></pre>


            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">if</span> (bulletCount === <span class="number">1</span>) {
  bulletCount += <span class="string">' bullet'</span>;
} <span class="keyword">else</span> {
  bulletCount += <span class="string">' bullets'</span>;
}</code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="keyword">var</span> user = (name == <span class="literal">null</span>) ? <span class="string">'default user'</span> : name;</code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Statements/if...else">If...else
                        reference
                        (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h4>switch</h4>
            <p>Switch usage is often advised when you have too much if statements. Don&#39;t forget the
                <code>break</code>
                keyword. Note that you can use string unlike some other languages.</p>
            <pre data-language="javascript"><code class="language-javascript"><span class="keyword">var</span> quote;
<span class="keyword">switch</span> (characterName) {
  <span class="keyword">case</span> <span class="string">'Smith'</span>:
    quote = <span class="string">'Goodbye, Mr. Anderson...'</span>;
    <span class="keyword">break</span>;
  <span class="keyword">case</span> <span class="string">'Neo'</span>:
    quote = <span class="string">'I know kung fu.'</span>;
    <span class="keyword">break</span>;
  <span class="keyword">default</span>:
    quote = <span class="string">'What is the Matrix?'</span>;
    <span class="keyword">break</span>;
}</code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Statements/switch">Switch reference
                        (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h3>loops</h3>

            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">for</span> (<span class="keyword">var</span> i = <span class="number">0</span>; i &lt; <span class="number">10</span>; i++) {
  doSomething();
}</code></pre>


            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">var</span> count = <span class="number">0</span>;
<span class="keyword">while</span> (count &lt; <span class="number">10</span>) {
  doSomething();
  count++;
}</code></pre>


            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">var</span> count = <span class="number">100</span>;
<span class="keyword">do</span> {
  doSomething();
} <span class="keyword">while</span> (--count > <span class="number">0</span>);</code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Guide/Statements#Loop_Statements">Loops
                        reference
                        (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h4>for...in loops</h4>
            <p>for..in loops are used to iterate over properties of an object.</p>
            <p>Array indexes are just enumerable properties with integer names. Therefore, for...in loops could be used
                to
                enumerate elements of an array.</p>
            <p>Because of performance issues and in order to avoid bugs, use classic for loops instead of for..in with
                arrays.</p>
            <pre data-language="javascript"><code class="language-javascript"><span class="keyword">var</span> a = [<span class="number">123</span>, <span class="number">456</span>, <span class="number">789</span>];
<span class="keyword">for</span> (<span class="keyword">var</span> i <span class="keyword">in</span> a) {      <span class="comment">// DO NOT use with arrays</span>
  doSomething(a[i]);
}</code></pre>


            <p class="list incremental warning">Because of <strong>performance issues</strong> and in order to avoid
                <strong>&quot;bugs&quot; and &quot;strange behaviours&quot;</strong>, <strong>use classic for loops
                    instead</strong> of for..in with arrays.
            </p>

            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Statements/for...in">for...in loops
                        reference (MDN)</a></li>
                <li><a href="http://jsperf.com/for-vs-for-in">for vs. for..in (JSperf.com)</a></li>
            </ul>
        </section>

        <section>
            <h2 id="simple-functions">Simple functions</h2>
            <p>Functions are declared with the <code>function</code> keyword. There&#39;s no return type and no variable
                type for the arguments.</p>

            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="function"><span class="keyword">function</span> <span class="title">functionName</span><span class="params">(var1, var2, var3)</span> {</span> <span class="comment">// no variable types</span>
  <span class="comment">/*
    Some code here
  */</span>
  <span class="keyword">return</span> returnVal;                       <span class="comment">// optional</span>
}</code></pre>


            <pre data-language="javascript"
                class="incremental"><code class="language-javascript"><span class="function"><span class="keyword">function</span> <span class="title">useArgs</span><span class="params">(var1, var2, var3)</span> {</span>
  <span class="keyword">var</span> a = arguments.length;       <span class="comment">// array containing all the arguments</span>
  <span class="keyword">var</span> result = <span class="string">""</span>;
  <span class="keyword">for</span> (<span class="keyword">var</span> i = <span class="number">0</span>; i &lt; a; i++) {
    result += <span class="string">" "</span> + arguments[i];
  }
  <span class="keyword">return</span> result;
}
<span class="keyword">var</span> b = useArgs(<span class="string">"Déjà"</span>, <span class="string">"vu"</span>);    <span class="comment">// b => " Déjà vu", var3 = undefined</span></code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/JavaScript/Reference/Global_Objects/Function">Function
                        reference (MDN)</a></li>
            </ul>
        </section>

        <section class="cover">
            <h2 id="variable-scope">Variable scope</h2>
            <p>The scope of a variable is the region of your code in which it is defined. JavaScript has a very specific
                way
                of handling scope. Scope can be altered by <code>function</code>s and the <code>var</code> keyword.</p>
            <p>Note that statements like <code>if</code>, <code>for</code>... doesn&#39;t change scope of variables. See
                reference for more details.</p>

            <ul class="useful-links">
                <li><a
                        href="https://developer.mozilla.org/en/JavaScript/Guide/Values,_Variables,_and_Literals#Variable_Scope">Variable
                        scope (MDN)</a></li>
            </ul>
        </section>

        <section>
            <h3>Global vs. local</h3>
            <p>Variables declared outside of any function are defined everywhere in your code. They are considered
                global.
            </p>
            <p>Variables declared inside a function are defined only within the function body. They are considered local
                to
                the function.</p>
            <pre data-language="javascript"><code class="language-javascript"><span class="keyword">var</span> name = <span class="string">"Andy"</span>;             <span class="comment">// not in a function => variable is global</span>

<span class="function"><span class="keyword">function</span> <span class="title">foo</span><span class="params">()</span> {</span>
  <span class="keyword">var</span> lastName = <span class="string">"WACHOWSKI"</span>;   <span class="comment">// inside a function => variable is local</span>
  <span class="keyword">return</span> name + <span class="string">' '</span> + lastname; <span class="comment">// can access global variable "name"</span>
}
foo();

<span class="keyword">var</span> a = lastName;           <span class="comment">// ReferenceError lastName is not defined</span>
                            <span class="comment">// can not access local variable "lastName"</span></code></pre>

        </section>

        <section>
            <h3>Don&#39;t forget <code>var</code></h3>
            <p>If you ommit the <code>var</code> keyword inside a function, the variable is automatically considered
                global.
                It can have serious side effects. It&#39;s considered bad practice, you shouldn&#39;t use this.</p>

            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">var</span> i = <span class="number">1</span>;
<span class="function"><span class="keyword">function</span> <span class="title">foo</span><span class="params">()</span> {</span>
  <span class="keyword">var</span> i = <span class="number">3</span>;
}
foo();
<span class="keyword">var</span> a = i;        <span class="comment">// a => 1</span></code></pre>


            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">var</span> i = <span class="number">1</span>;
<span class="function"><span class="keyword">function</span> <span class="title">foo</span><span class="params">()</span> {</span>
  i = <span class="number">3</span>;          <span class="comment">// no var keyword !!! :-(</span>
  j = <span class="number">4</span>;          <span class="comment">// no var keyword !!! :-(</span>
}
foo();
<span class="keyword">var</span> a = i;        <span class="comment">// a => 3</span>
<span class="keyword">var</span> b = j;        <span class="comment">// b => 4</span></code></pre>

        </section>

        <section class="cover">
            <h2 id="browser-environment">Browser environment</h2>
        </section>

        <section>
            <h3>Integration</h3>
            <p>The best way to integrate JavaScript in a web page is through a JavaScript file and a link to it in your
                HTML
                page. The link can be placed in <code>head</code> or <code>body</code> it really depends on the
                situation.
            </p>
            <pre data-language="html5"><code class="language-html5"><span class="doctype">&lt;!DOCTYPE html></span>
<span class="tag">&lt;<span class="title">html</span>></span>
  <span class="tag">&lt;<span class="title">head</span>></span>
    <span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"myscript1.js"</span>></span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>></span>   <span class="comment">&lt;!-- unobstrusive JS --></span>
    <span class="tag">&lt;<span class="title">script</span>></span><span class="javascript"> <span class="comment">// some code </span></span><span class="tag">&lt;/<span class="title">script</span>></span>        <span class="comment">&lt;!-- REALLY BAD PRACTICE --></span>
  <span class="tag">&lt;/<span class="title">head</span>></span>
  <span class="tag">&lt;<span class="title">body</span>></span>
    <span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"myscript2.js"</span>></span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>></span>   <span class="comment">&lt;!-- better unobstrusive JS --></span>
  <span class="tag">&lt;/<span class="title">body</span>></span>
<span class="tag">&lt;/<span class="title">html</span>></span></code></pre>


            <p class="list incremental warning"><strong>Avoid direct JavaScript in HTML documents</strong>, it&#39;s a
                bad
                practice. It <strong>breaks the structure/behaviour separation</strong>. <strong>Code can&#39;t be
                    reused on
                    other pages</strong>. It also prevents you from having a changeable and maintenable code.</p>
            <p>Putting your scripts at the just before the <code>&lt;/body&gt;</code> is a good practice. We&#39;ll see
                that
                in details in performances lesson.</p>

            <ul class="useful-links">
                <li><a href="http://labs.adobe.com/technologies/spry/articles/best_practices/separating_behavior.html">Unobstrusive
                        JavaScript (labs.adobe.com)</a></li>
                <li><a href="http://robertnyman.com/2008/11/20/why-inline-css-and-javascript-code-is-such-a-bad-thing/">Why
                        Inline CSS And JavaScript Code Is Such A Bad Thing (<a
                            href="http://robertnyman.com/">http://robertnyman.com/</a>)</a></li>
                <li><a href="http://robertnyman.com/2008/04/23/where-to-include-javascript-files-in-a-document/">Where
                        To
                        Include JavaScript Files In A Document</a></li>
            </ul>
        </section>

        <section>
            <h3>Browser objects</h3>
            <p>Every JavaScript plateform/environment adds objects with global scope. They&#39;re meant to provide
                helpful
                features to developers. In web browsers the most important ones are : <code>document</code> and
                <code>window</code>.
            </p>
            <p>Another object is present but only in modern browsers : <code>console</code>. Since it&#39;s not
                standard,
                implementations may differ, see references for more details. Remember that older browsers don&#39;t
                support
                it, so don&#39;t let <code>console.log(&#39;foo&#39;)</code> etc... in production code.</p>

            <pre data-language="javascript" class="incremental"><code class="language-javascript"><span class="keyword">var</span> title = document.title;
<span class="keyword">var</span> href = window.location.href;
<span class="keyword">var</span> userAgent = window.navigator.userAgent;</code></pre>


            <pre data-language="javascript" class="incremental"><code class="language-javascript">window.alert(<span class="string">'Never send a human to do a machine\'s job.'</span>);
<span class="keyword">var</span> bluePill = confirm(<span class="string">'Take the blue pill?'</span>);
<span class="keyword">var</span> name = prompt(<span class="string">'What is your name?'</span>);</code></pre>


            <pre data-language="javascript" class="incremental"><code class="language-javascript">console.log(<span class="string">'Perhaps we are asking the wrong questions.'</span>);
console.error(<span class="string">'Nothing. Just had a little déjà vu.'</span>);
console.info(<span class="string">'A déjà vu is usually a glitch in the Matrix.'</span>);
console.warn(<span class="string">'The Matrix is a system, Neo. That system is our enemy.'</span>);</code></pre>


            <ul class="useful-links">
                <li><a href="https://developer.mozilla.org/en/DOM/document">document reference (MDN)</a></li>
                <li><a href="https://developer.mozilla.org/en/DOM/window">window reference (MDN)</a></li>
                <li><a href="https://developer.mozilla.org/en/Using_the_Web_Console">Firefox web console (MDN)</a></li>
                <li><a href="http://code.google.com/chrome/devtools/docs/console.html">Chrome web console</a></li>
                <li><a href="http://msdn.microsoft.com/en-us/library/ie/gg589507.aspx">IE web console</a></li>
                <li><a href="http://www.opera.com/dragonfly/documentation/console/">Opera web console</a></li>
                <li><a
                        href="http://developer.apple.com/library/safari/%23documentation/AppleApplications/Conceptual/Safari%20Developer%20Guide/DebuggingYourWebsite/DebuggingYourWebsite.html#/apple_ref/doc/uid/TP40007874-CH8-SW17">Safari
                        web console</a></li>
            </ul>
        </section>

        <section>
            <h2 id="tools">Tools</h2>
            <p>Your browser should have two very useful tools to work with JavaScript :</p>
            <ul>
                <li>JavaScript Debugger</li>
                <li>JavaScript Console</li>
            </ul>
            <p>There&#39;s also great tools on the web :</p>
            <ul>
                <li><a href="http://jsfiddle.net/">JSfiddle (online playground)</a></li>
                <li><a href="http://jsbin.com/">JS Bin (online playground)</a></li>
                <li><a href="http://codepen.io/">Codepen (online playground)</a></li>
                <li><a href="http://tinkerbin.com/">tinkerbin (online playground)</a></li>
                <li><a href="http://jsperf.com/">JSperf (online benchmarking tool)</a></li>
            </ul>
        </section>
    </div>

    <script src="src/js/basics.js"></script>
</body>

</html>