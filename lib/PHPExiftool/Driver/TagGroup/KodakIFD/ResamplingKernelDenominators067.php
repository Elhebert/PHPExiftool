<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\KodakIFD;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ResamplingKernelDenominators067 extends AbstractTagGroup
{

  protected string $id = 'KodakIFD:ResamplingKernelDenominators067';

  protected string $name = 'ResamplingKernelDenominators067';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Kodak::IFD
       * line : 156566
       * type : int16u
       * writable : true
       * count : 3
       * flags : permanent
       */
      'id' => 'Kodak::IFD.KodakIFD:ResamplingKernelDenominators067',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 3;

  protected int $flags = 2052;

}
