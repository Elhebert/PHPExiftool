<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Sony;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AFStatus_30_C6_Vertical extends AbstractTagGroup
{

  protected string $id = 'Sony:AFStatus_30_C6_Vertical';

  protected string $name = 'AFStatus_30_C6_Vertical';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
    'en' => 'AF Status 30 C6 Vertical',
  ];

  protected int $count = 0;

  protected int $flags = 4;

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFStatus79
       * line : 344600
       * type : int16s
       * writable : true
       * count : 
       * flags : Permanent
       */
      'id' => 'Sony::AFStatus79.Sony:AFStatus_30_C6_Vertical',
      'desc' => [
        'en' => 'AF Status 30 C6 Vertical',
      ],
    ],
  ];

}
