#include <stdio.h>
int main() {
   char m[100] = "magpie{";

   char d[] = "f4k3__";

   char f[] = "why_15";
   char b[] = "f149_";

   char l[] = "_17_up51d3";
   char a[] = "_d0wn";
   char c[] = "h4h4}";
   char g[] = "_4nyw4y5?}";
   char w[] = "";
   char x[] = "";
   char y[] = "";
   char z[1000];
   int i;
   for (i=0; i<strlen(f); i++)
  {
    char temp = f[i] ^ d[i];
    w[i] = temp;
  }

  w[i] = '\0';
  
     for (i=0; i<strlen(a); i++)
  {
    char temp = a[i] ^ b[i];
    x[i] = temp;
  }

  x[i] = '\0';
  
    strcpy(z, strncat(strncat(strncat(m, w, 15), strncat(l, x, 15), 20), g, 100));

   printf("%s\n", z);
   return 0;
}
