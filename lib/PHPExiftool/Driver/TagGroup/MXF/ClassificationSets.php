<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\MXF;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class ClassificationSets extends AbstractTagGroup
{

  protected string $id = 'MXF:ClassificationSets';

  protected string $name = 'ClassificationSets';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
    'en' => 'Classification Sets',
  ];

  protected int $count = 0;

  protected int $flags = 32;

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 171884
       * type : ?
       * writable : false
       * count : 
       * flags : Unknown
       */
      'id' => 'MXF::Main.MXF:ClassificationSets',
      'desc' => [
        'en' => 'Classification Sets',
      ],
    ],
  ];

}
