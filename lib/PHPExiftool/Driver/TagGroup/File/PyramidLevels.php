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
class PyramidLevels extends AbstractTagGroup
{

  protected string $id = 'File:PyramidLevels';

  protected string $name = 'PyramidLevels';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PGF::Main
       * line : 264505
       * type : int8u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PGF::Main.File:PyramidLevels',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
