/********************************************************************************
 *  StringBuilder class
 * 
 * *****************************************************************************/
// Initializes a new instance of the StringBuilder class
// and appends the given value if supplied

class StringBuilder {
    strings = new Array("");
    
    construtor(value){
        this.append(value);
    }
    
    append(value)
    {
        if (value)
        {
            this.strings.push(value);
        }
    }
    
    // Clears the string buffer
    clear ()
    {
        this.strings.length = 1;
    }
    
    // Converts this instance to a String.
    toString ()
    {
        return this.strings.join("");
    }
    
}
/*function StringBuilder(value)
{
    this.strings = new Array("");
    this.append(value);
}

// Appends the given value to the end of this instance.
StringBuilder.prototype.append = function (value)
{
    if (value)
    {
        this.strings.push(value);
    }
}

// Clears the string buffer
StringBuilder.prototype.clear = function ()
{
    this.strings.length = 1;
}

// Converts this instance to a String.
StringBuilder.prototype.toString = function ()
{
    return this.strings.join("");
}*/