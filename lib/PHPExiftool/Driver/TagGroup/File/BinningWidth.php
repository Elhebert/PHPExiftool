<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\File;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class BinningWidth extends AbstractTagGroup
{

  protected string $id = 'File:BinningWidth';

  protected string $name = 'BinningWidth';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::FEI12
       * line : 166592
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MRC::FEI12.File:BinningWidth',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
