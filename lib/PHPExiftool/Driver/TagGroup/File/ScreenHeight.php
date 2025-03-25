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
class ScreenHeight extends AbstractTagGroup
{

  protected string $id = 'File:ScreenHeight';

  protected string $name = 'ScreenHeight';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : PCX::Main
       * line : 264022
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'PCX::Main.File:ScreenHeight',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
