#include <stdio.h>
int main() {
    char c;
    char l[] = "magpie{1_23411y_d0n7_11k3_5721n95_1n_my_f00d}";
    printf("Enter a character: ");
    scanf("%c", &c);

    if ((c >= 'a' && c <= 'z') || (c >= 'A' && c <= 'Z'))
        printf("%c is in the alphabet.", c);
    else
        printf("%c is not in the alphabet.", c);

    return 0;
}
