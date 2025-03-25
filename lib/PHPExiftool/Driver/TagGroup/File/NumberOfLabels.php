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
class NumberOfLabels extends AbstractTagGroup
{

  protected string $id = 'File:NumberOfLabels';

  protected string $name = 'NumberOfLabels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::Main
       * line : 166979
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MRC::Main.File:NumberOfLabels',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
