<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\TagGroup\CBOR;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTagGroup;

/**
 * @ExclusionPolicy("all")
 */
class DocumentID extends AbstractTagGroup
{

  protected string $id = 'CBOR:DocumentID';

  protected string $name = 'DocumentID';

  protected ?string $phpType = 'mixed';

  protected bool $isWritable = false;

  protected array $description = [
  ];

  protected array $tags = [
    0 => [
      /**
       * table_name : CBOR::Main
       * line : 3767
       * type : ?
       * writable : false
       * count : 
       * flags : 
       */
      'id' => 'CBOR::Main.CBOR:DocumentID',
      'desc' => [
      ],
    ],
  ];

  protected int $count = 0;

}
