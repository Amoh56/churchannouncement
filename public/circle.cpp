#include <iostream>
using namespace std;
const pi=3.142;
class Circle
{
    public:
       int radius;
    
};
class Formulae: public Circle
{
    void rec(){
    int area;
    area=pi*radius*radius;
    cout<<" This is the area of a circle\t "<< area;
    }
};

int main()
{
    Circle C;
    C.radius=14;
    C.rec();
    return 0;

}