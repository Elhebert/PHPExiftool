<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Canon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ModifiedWhiteBalance extends AbstractTagGroup
{

  protected string $id = 'Canon:ModifiedWhiteBalance';

  protected string $name = 'ModifiedWhiteBalance';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::ModifiedInfo
       * line : 66551
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::ModifiedInfo.Canon:ModifiedWhiteBalance',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
