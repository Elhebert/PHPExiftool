<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\DjVu;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class IncludedFileID extends AbstractTagGroup
{

  protected string $id = 'DjVu:IncludedFileID';

  protected string $name = 'IncludedFileID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : DjVu::Main
       * line : 107234
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'DjVu::Main.DjVu:IncludedFileID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
