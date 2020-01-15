#include <math.h>
float Series(int co, int exp, int start, int end)
{
float f;
for (int i = start; i < end + 1; i++)
{
  f = pow(i, exp) + f;
}
f = f * co;
return f;
}
