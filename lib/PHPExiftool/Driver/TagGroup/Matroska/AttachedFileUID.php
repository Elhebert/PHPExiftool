<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\Matroska;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class AttachedFileUID extends AbstractTagGroup
{

  protected string $id = 'Matroska:AttachedFileUID';

  protected string $name = 'AttachedFileUID';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : Matroska::Main
       * line : 173550
       * type : unsigned
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'Matroska::Main.Matroska:AttachedFileUID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
