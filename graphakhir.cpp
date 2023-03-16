#include <iostream>
#include <conio.h>
using namespace std;

int main()
{
    system("cls");
    bool found, all_zero;
    int matrix[10][10];
    int i, j, simpul, sisi, asal , tujuan;

    cout<<"masukka jumlah simpul : ";
    cin>>simpul;
    cout<<"masukkan jumlah sisi : ";
    cin>> sisi;
    
    for(i = 1; i <= simpul; i++)
    {
        for ( j = 1; j <= simpul; j++)
        {
            matrix[i][j]=0;
        }
    }

    for (i = 1; i <= sisi; i++)
    {
        cout<<"masukkan simpul asal : ";
        cin>>asal;
        cout<<"masukkan simpul tujuan : ";
        cin>>tujuan;
        matrix[asal][tujuan]=1;
        matrix[tujuan][asal]=1;
    }

    i=1; all_zero=false;
    while (i <= simpul && !all_zero)
    {
        j=1; found=false;
        while (j <= simpul && !found)
        {
            if (matrix[i][j]==1)
            {
                found=true;
            }
            else
            {
                j++;
            }
        }
        if (!found)
        {
            all_zero=true;
        }
        else
        {
            i++;
        }
    }
    if (all_zero)
    {
        cout<<"graph tidak terhubung";
    }
    else
    {
        cout<<"graph terhubung";
    }
    getch();
    
}