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
class TransportStreamID extends AbstractTagGroup
{

  protected string $id = 'MXF:TransportStreamID';

  protected string $name = 'TransportStreamID';

  protected ?string $phpType = 'int';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : MXF::Main
       * line : 169788
       * type : int16u
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'MXF::Main.MXF:TransportStreamID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
