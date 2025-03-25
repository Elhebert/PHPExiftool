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
class OriginalImageWidth extends AbstractTagGroup
{

  protected string $id = 'Canon:OriginalImageWidth';

  protected string $name = 'OriginalImageWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = true;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Canon::VignettingCorr
       * line : 71187
       * type : int16s
       * writable : true
       * count : 
       * flags : permanent
       */
      'id' => 'Canon::VignettingCorr.Canon:OriginalImageWidth',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

  protected int $flags = 2052;

}
