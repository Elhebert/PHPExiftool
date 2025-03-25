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
class AFStatus_19_G2 extends AbstractTagGroup
{

  protected string $id = 'Sony:AFStatus_19_G2';

  protected string $name = 'AFStatus_19_G2';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Sony::AFStatus79
       * line : 344136
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Sony::AFStatus79.Sony:AFStatus_19_G2',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
