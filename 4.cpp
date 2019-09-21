#include <stdio.h>
int a,b=1,c,d,e,f,i,j;
int main()

{
    
printf("Masukkan nilai baris = ");
scanf("%d",&c);
printf("Masukkan nilai kolom = ");
scanf("%d",&d);

for(i=0;i<c;i++)
    {
    for(j=0;j<d;j++)
        {
            if(e==0)
                {
                printf("%d,",a);
                e++;
                }
            else if(e==1)
                {
                printf("%d,",b); 
                e++;
                }
            else 
                { 
                printf("%d,",b);  
                f=b+a;
                a=b;  
                b=f;
                }
        }
          printf("\n");
    }
     
}
