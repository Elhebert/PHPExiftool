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
class SpaceGroupNumber extends AbstractTagGroup
{

  protected string $id = 'File:SpaceGroupNumber';

  protected string $name = 'SpaceGroupNumber';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MRC::Main
       * line : 166957
       * type : int32u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MRC::Main.File:SpaceGroupNumber',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
